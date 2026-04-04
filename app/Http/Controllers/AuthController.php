<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\Recaptcha;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * 註冊：建立新帳號並自動登入
     */
    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'name'                 => ['required', 'string', 'max:255', 'unique:users'],
            'email'                => ['required', 'email', 'max:255', 'unique:users'],
            'phone'                => ['nullable', 'string', 'max:20'],
            'password'             => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => ['required', new Recaptcha],
        ], [
            'name.required'   => '請輸入使用者名稱。',
            'name.unique'     => '此使用者名稱已被使用。',
            'email.required'  => '請輸入電子郵件。',
            'email.unique'    => '此電子郵件已被使用。',
            'password.min'    => '密碼至少需要 8 個字元。',
            'password.confirmed' => '兩次輸入的密碼不一致。',
        ]);

        try {
            $user = User::create([
                'name'     => $request->input('name'),
                'email'    => $request->input('email'),
                'phone'    => $request->input('phone'),
                'password' => $request->input('password'),
            ]);
        } catch (UniqueConstraintViolationException $e) {
            return back()
                ->withInput($request->only('name', 'email', 'phone'))
                ->withErrors(['email' => '此電子郵件已被使用。']);
        }

        Auth::login($user);

        $request->session()->regenerate();

        return redirect('/');
    }

    /**
     * 登入：接受 使用者名稱 / 電子郵件 / 手機號碼 + 密碼
     */
    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'credential' => ['required', 'string'],
            'password'   => ['required', 'string'],
            'g-recaptcha-response' => ['required', new Recaptcha]
        ]);

        // 從表單送來的資料取出名稱為 credential 的欄位值
        $credential = $request->input('credential');
        // 根據輸入內容判斷應比對哪個欄位
        $field      = $this->detectField($credential);

        // Auth::attempt + $request->boolean('remember') = 設定一個長效 cookie 不用重新登入
        // 必要條件 1. 前端 表單要有checkbox，name 必須是 remember
        // 必要條件 2. 後端 Auth::attempt() 第二個參數傳入 $request->boolean('remember')
        // 必要條件 3. 資料庫 — users 資料表要有 remember_token 欄位
        $attempted = Auth::attempt(
            //exp. $field = 'email', $credential = 'user@example.com' = ['email' => 'user@example.com', 'password' => '']
            [$field => $credential, 'password' => $request->input('password')],
            $request->boolean('remember')
        );

        if (! $attempted) {
            return back()
                ->withInput($request->only('credential'))
                ->withErrors(['credential' => '帳號或密碼錯誤，請確認後再試。']);
        }

        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    /**
     * 登出
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * 欄位邏輯:
     *   依照輸入的內容判斷應比對哪個欄位：
     *   - 含 @ 符號 → email
     *   - 純數字 / 含 + - 空格且 7~20 字元 → phone
     *   - 其餘 → name（使用者名稱）
     */
    private function detectField(string $credential): string
    {
        if (str_contains($credential, '@')) {
            return 'email';
        }

        if (preg_match('/^[0-9\+\-\s]{7,20}$/', $credential)) {
            return 'phone';
        }

        return 'name';
    }
}
