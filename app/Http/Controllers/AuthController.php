<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * 登入：接受 使用者名稱 / 電子郵件 / 手機號碼 + 密碼
     */
    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'credential' => ['required', 'string'],
            'password'   => ['required', 'string'],
        ]);

        $credential = $request->input('credential');
        $field      = $this->detectField($credential);

        $attempted = Auth::attempt(
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
     * 依輸入內容判斷應比對哪個欄位：
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
