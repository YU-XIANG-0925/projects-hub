<?php

namespace App\Http\Controllers;

use App\Rules\Recaptcha;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * 註冊
     */
    // public function store

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

        $attempted = Auth::attempt(
            //exp. $field = 'email', $credential = 'user@example.com' = ['email' => 'user@example.com', 'password' => '']
            [$field => $credential, 'password' => $request->input('password')],
            // Auth::attempt + $request->boolean('remember') = 設定一個長效 cookie 不用重新登入
            // 必要條件 1. 前端 表單要有checkbox，name 必須是 remember
            // 必要條件 2. 後端 Auth::attempt() 第二個參數傳入 $request->boolean('remember')
            // 必要條件 3. 資料庫 — users 資料表要有 remember_token 欄位
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
