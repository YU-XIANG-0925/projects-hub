<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Personal Portal')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all_might_color.css') }}">
    @yield('other-links')
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        {{-- 
        navbar: 導覽列core，定義導覽列布局、間距、內容物(ex. Brand or Naw)的排列順序。
        navbar-light: 定義導覽列的背景顏色為淺色 P.S BS5.3+ 被data-bs-theme="light"
        bg-light: 定義背景為淺色(light為淺灰色)
         --}}
        <div class="container-fluid">
            {{-- container-fluid: 定義容器為全寬度，橫跨可視區域的整個寬度。達到讓導覽列內容橫向排滿 --}}
            <a class="navbar-brand" href="/">作品集管理器</a>
            {{-- navbar-brand: 定義導覽列的Logo --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                {{-- navbar-toggler: 導覽列切換器/漢堡選單按鈕專屬 --}}
                <span class="navbar-toggler-icon"></span>
                {{-- navbar-toggler-icon: 漢堡選單專屬圖示 --}}
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                {{-- collapse: 控制導覽列內容的顯示與隱藏 --}}
                <ul class="navbar-nav">
                    {{-- 
                    navbar-nav: 導覽清單，移除ul預設圓點
                    nav-item: 導覽項目
                    nav-link: 導覽連結，美化連結文字並增加點擊區域的範圍
                     --}}
                    <li class="nav-item"><a class="nav-link px-3" href="/">首頁</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/projects">專案展示</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/resume">個人履歷</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/dashboard">管理後台</a></li>
                </ul>
                <div class="d-flex ms-lg-3 mt-3 mt-lg-0">
                    {{-- 
                    d-flex: 定義為彈性容器，讓子元素可以自由調整大小和位置
                    ms-lg-3: 在大螢幕以上的裝置上，增加左邊距離3個單位
                    mt-3: 在所有裝置上，增加上邊距離3個單位
                    mt-lg-0: 在大螢幕以上的裝置上，移除上邊距離，讓按鈕與導覽列內容在同一水平線上
                     --}}
                    <a href="/login" class="btn btn-outline-primary me-2 px-4 rounded-pill">登入</a>
                    <a href="/register" class="btn btn-primary px-4 rounded-pill shadow-sm">註冊帳號</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    @stack('scripts')
</body>

</html>
