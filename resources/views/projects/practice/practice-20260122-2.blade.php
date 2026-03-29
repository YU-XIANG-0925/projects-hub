@extends('layouts.app')

@section('title', 'ch1 HTML 基礎練習')

@section('content')
    hello world! <br />
    hello world! <br />
    hello world! <br />
    hello world! <br />
    hello world! <br />

    <p>hello world!</p>
    <p>hello world!</p>
    <p>hello world!</p>
    <p>hello world!</p>
    <p>hello world!</p>

    <h1>h1: hello world!</h1>
    <h2>h2: hello world!</h2>
    <h3>h3: hello world!</h3>
    <h4>h4: hello world!</h4>
    <h5>h5: hello world!</h5>
    <h6>h6: hello world!</h6>

    <!-- 使用假文產生器 測試用的文字  ctlorem+字數(預設128)-->
    <h1>他的設為一隻領先，想法參考，許多往往存。</h1>
    <p>
        <strong>合作幾天土地最多鄉民促銷畢竟推坑王，立即貢獻保險想想天空相冊兩年，網上看到數碼相機，積分無法情感面向戀愛進行望着如下動畫，糖尿病一人作品擔任好處積極支付影響，頻道攻擊不足學生，照顧比賽上來，需求走勢。</strong>
    </p>

    <!-- 使用假圖產生器 測試用圖片 picsum  -->
    <img src="https://picsum.photos/500/200" alt="" />
    <img src="https://picsum.photos/400/200" alt="" />
    <img src="https://picsum.photos/300/200" alt="" />

    <h1>免費圖庫 : unsplash</h1>
    <img src="{{ asset('images/3DP-001.jpg') }}" alt="" width="500px" />
    <img src="{{ asset('images/3DP-002.jpg') }}" alt="" width="500px" />
    <img src="{{ asset('images/3DP-003.jpg') }}" alt="" width="500px" />

    <h2>數值 VS 比例</h2>
    <p>width="300px"</p>
    <img src="{{ asset('images/3DP-001.jpg') }}" alt="" width="300px" />
    <p>width="50%"</p>
    <img src="{{ asset('images/3DP-001.jpg') }}" alt="" width="50%" />
    <p><i>嘗試縮放視窗寬度</i></p>

    <p>這是普通的文字連結，點擊後會在「當前分頁」跳轉：</p>
    <a href="https://www.google.com">前往 Google 首頁</a>

    <br /><br />

    <p>這是另開視窗的文字連結，點擊後會開啟「新的分頁」：</p>
    <a href="https://www.google.com" target="_blank" rel="noopener noreferrer">另開視窗前往 Google 首頁</a>

    <p>點擊下方的圖片，將會在「當前分頁」跳轉到目標網站：</p>
    <a href="https://www.wikipedia.org/">
        <img src="assets/3DP-001.jpg" alt="另開視窗的圖片連結" width="100px" />
    </a>

    <br /><br />

    <p>點擊下方的圖片，將會開啟「新的分頁」跳轉到目標網站：</p>
    <a href="https://www.wikipedia.org/" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset('images/3DP-001.jpg') }}" alt="另開視窗的圖片連結" width="100px" />
    </a>
@endsection
