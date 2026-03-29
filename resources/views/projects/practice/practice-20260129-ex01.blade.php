@extends('layouts.app')

@section('other-styles')
    <style>
        body {
            /* 背景色：改用皮膚光-淺色 */
            background-color: var(--skin-and-light-light);
        }

        .wapper {
            /* 容器背景：改用英雄藍-深色 */
            background-color: var(--hero-blue-dark);
            margin: 0 auto;
            width: 1024px;
        }

        .wapper .header img {
            width: 100%;
        }

        .mynav {
            /* 導覽列背景：改用英雄藍 */
            background-color: var(--hero-blue);
            text-align: center;
        }

        .mynav ul {
            display: inline-block;
        }

        .mynav ul li {
            float: left;
            list-style-type: none;
        }

        .mynav ul li a {
            display: block;
            padding: 15px 20px;
            /* 按鈕背景：改用黃金時代 */
            background-color: var(--golden-era);
            text-decoration: none;
            /* 文字顏色：改用墨水陰影 */
            color: var(--ink-shadow);
            margin-right: 20px;
            border-radius: 10px;
            /* 陰影：改用墨水陰影-淺色 */
            box-shadow: 2px 2px 5px var(--ink-shadow-light);
            transition: all 0.3s ease;
        }

        .mynav ul li a:hover {
            /* 懸停效果：改用緋紅重擊 */
            background-color: var(--crimson-strike);
            box-shadow: 4px 4px 8px var(--ink-shadow);
            color: #fff;
            transition: all 0.3s ease;
        }

        .content {
            padding: 20px;
        }

        .content_in {
            /* 內容區塊背景：改用皮膚光 */
            background-color: var(--skin-and-light);
            padding: 40px;
            border-radius: 8px;
            /* 陰影：改用皮膚光-深色 */
            box-shadow: 0 4px 20px var(--skin-and-light-dark);
            text-align: center;
        }

        .content_in h1 {
            /* 標題顏色：改用英雄藍-深色 */
            color: var(--hero-blue-dark);
            margin-bottom: 25px;
        }

        .content_in p {
            /* 文字顏色：改用墨水陰影 */
            color: var(--ink-shadow);
            font-size: 20px;
            margin-bottom: 15px;
            line-height: 1.8;
        }

        .content_in a {
            display: inline-block;
            padding: 15px 20px;
            /* 連結背景：改用黃金時代-淺色 */
            background-color: var(--golden-era-light);
            border-radius: 15%;
            /* 陰影：改用墨水陰影-深色 */
            box-shadow: 2px 2px 5px 2px var(--ink-shadow-dark);
            color: var(--ink-shadow);
            text-decoration: none;
        }

        .content_in a:hover {
            /* 連結懸停：改用緋紅重擊 */
            background-color: var(--crimson-strike);
            box-shadow: 4px 4px 8px var(--hero-blue-light);
            color: var(--ink-shadow-dark);
            transform: scale(1.2);
            transition: all 0.3s ease;
        }

        .footer {
            /* 頁尾背景：改用英雄藍 */
            background-color: var(--hero-blue);
            text-align: center;
        }

        .footer .info {
            padding: 5px;
        }

        .footer .info p {
            /* 頁尾文字：改用皮膚光-淺色 */
            color: var(--skin-and-light-light);
            margin: 0 auto;
            line-height: 1.5;
        }

        @media screen and (max-width: 1024px) {
            .wapper {
                width: 100%;
            }

            .mynav ul {
                display: block;
            }

            .mynav ul li {
                width: 80%;
                float: none;
                margin: 1px auto;
            }

            .content p {
                font-size: 15px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="wapper">
        <div class="header">
            <img src="https://picsum.photos/id/925/1440/250" alt="">
            <nav>
                <ul>
                    <li><a href="">首頁</a></li>
                    <li><a href="">最新消息</a></li>
                    <li><a href="">更多資訊</a></li>
                    <li><a href="">關於我們</a></li>
                    <li><a href="">聯絡我們</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <div class="content_in">
                <h1>歡~迎~光~臨~</h1>
                <p>回來每一個獨立別的不明白後果地面都在，創造沒有滿意既然結合，對她溫柔性感啟動情節因為早就分享大多數股權，我對處理品牌睡覺被人飯店空中更大滿足，設立三大接下來球員調查鍵盤，民國價格抓住幾個永遠，破壞股東，不去發佈時間裝修儘管是他推薦比賽，多個幾次液晶感謝床。
                </p>
                <p>老大業績台中地方教授尚未作用相關對此儀器法國作品填寫以便，初音不久後來精神，適當幾次裝備自信，招聘黑色有時候那裡跟着就有，詳細瀏覽前進線路，是這樣言論授權特殊果然把握責任功能，事情名字日記學歷違反又是，台鐵稱為病毒讀者領域三個，相互這樣就在客人，失敗服飾。
                </p>
                <p>按照明確深深配套有限公司，崗位明確深深配套有限先生，當明確深深配套有限。</p>
                <a href="#">了解更多</a>
            </div>
        </div>
        <div class="footer">
            <div class="info">
                <p>© 2026 劉宇翔 (Liu Yu-Xiang). All Rights Reserved.</p>
                <p>Powered by Your Design</p>
            </div>
        </div>
    </div>
@endsection
