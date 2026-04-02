<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            {{-- Modal header --}}
            <div class="modal-header flex-column align-items-center border-0 pt-4 px-4 pb-0 position-relative">
                {{-- Bootstrap 關閉按鈕，絕對定位於右上角 --}}
                <button type="button" class="btn-close position-absolute top-0 end-0 m-1" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="h2 text-center mb-0" id="authModalLabel">Smallwind Project Hub</div>
                <p class="text-muted small mt-2 mb-1 text-center">管理您的專案與開發旅程</p>
            </div>

            {{-- Tab navigation --}}
            <div class="px-4 pt-3 pb-2 d-flex justify-content-center border-bottom">
                <ul class="nav nav-pills" id="authTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="modal-login-tab" data-bs-toggle="pill"
                            data-bs-target="#modal-login" type="button" role="tab" aria-controls="modal-login"
                            aria-selected="true">登入</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="modal-register-tab" data-bs-toggle="pill"
                            data-bs-target="#modal-register" type="button" role="tab"
                            aria-controls="modal-register" aria-selected="false">註冊</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="authTabContent">

                {{-- 登入表單 --}}
                <div class="tab-pane fade show active px-4 pt-4 pb-4" id="modal-login" role="tabpanel"
                    aria-labelledby="modal-login-tab">
                    <form id="loginForm" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('credential') is-invalid @enderror"
                                id="modalLoginCredential" name="credential" placeholder="使用者名稱 / 電子郵件 / 手機號碼"
                                value="{{ old('credential') }}" required autocomplete="username">
                            <label for="modalLoginCredential">使用者名稱 / 電子郵件 / 手機號碼</label>
                            @error('credential')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="modalLoginPassword" name="password" placeholder="Password" required
                                autocomplete="current-password">
                            <label for="modalLoginPassword">密碼</label>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="modalRememberMe"
                                    name="remember">
                                <label class="form-check-label text-muted small" for="modalRememberMe">
                                    記住我
                                </label>
                            </div>
                            <a href="#" class="text-decoration-none small">忘記密碼？</a>
                        </div>

                        <input type="hidden" name="g-recaptcha-response" id="recaptchaLoginToken">

                        <button type="submit" class="btn btn-primary w-100">登入系統</button>
                    </form>
                </div>

                {{-- 註冊表單 --}}
                <div class="tab-pane fade px-4 pt-4 pb-4" id="modal-register" role="tabpanel"
                    aria-labelledby="modal-register-tab">
                    {{-- 整合 Laravel 時： <form method="POST" action="{{ route('register') }}"> --}}
                    <form action="#{{-- route('register') --}}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="modalRegisterName" name="name"
                                placeholder="John Doe" required>
                            <label for="modalRegisterName">使用者名稱</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="modalRegisterEmail" name="email"
                                placeholder="name@example.com" required>
                            <label for="modalRegisterEmail">電子郵件</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="modalRegisterPhone" name="phone"
                                placeholder="0912345678">
                            <label for="modalRegisterPhone">手機號碼（選填）</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="modalRegisterPassword" name="password"
                                placeholder="Password" required>
                            <label for="modalRegisterPassword">密碼</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="modalRegisterPasswordConfirm"
                                name="password_confirmation" placeholder="Confirm Password" required>
                            <label for="modalRegisterPasswordConfirm">確認密碼</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">建立帳號</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const form = this;
        grecaptcha.enterprise.ready(function () {
            grecaptcha.enterprise.execute('{{ config("services.recaptcha.site_key") }}', { action: 'login' })
                .then(function (token) {
                    document.getElementById('recaptchaLoginToken').value = token;
                    form.submit();
                });
        });
    });

    // 點「註冊帳號」按鈕時自動切換到註冊頁籤
    document.querySelectorAll('[data-auth-tab="register"]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            setTimeout(function () {
                const tab = document.getElementById('modal-register-tab');
                if (tab) bootstrap.Tab.getOrCreateInstance(tab).show();
            }, 50);
        });
    });
</script>
@endpush
