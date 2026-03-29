@extends('layouts.app')

@section('title', 'ch3. 文字風格 練習')

@section('other-styles')
    <style>
        .box01 {
            width: 100%;
            border: 1px solid var(--ink-shadow-dark);
            padding: 20px;
            margin-top: 15px;
        }
    </style>
@endsection
</head>
@section('content')

    <div class="display-3 fw-500 hachi-maru-pop-regular">文字&圖片相關</div>
    <div class="h1">Bootstrap 使用class="h1~h5"</div>
    <div class="box01">
        <div class="h1">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
        <div class="h2">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
        <div class="h3">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
        <div class="h4">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
        <div class="h5">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
    </div>

    <div class="h1">使用大標 display1~6</div>
    <div class="box01">
        <div class="display-1">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
        <div class="display-2">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
        <div class="display-3">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
        <div class="display-4">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
        <div class="display-5">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
        <div class="display-6">爭取維修，業績對待觀眾比例娛樂回頭，緊。</div>
    </div>

    <div class="h1">4. text-sart text-center text-end</div>
    <div class="box01">
        <p class="text-start">文字靠左對齊</p>
        <p class="text-center">文字置中對齊</p>
        <p class="text-end">文字靠右對齊</p>
    </div>

    <div class="h1">5. list-unstyled</div>
    <div class="box01">
        <ul class="list-unstyled">
            <li>第一項</li>
            <li>
                第二項
                <ul>
                    <li>第二之一項</li>
                    <li>第二之二項</li>
                </ul>
            </li>
            <li>第三項</li>
        </ul>
    </div>

    <div class="h1">6. list-inline</div>
    <div class="box01">
        <ul class="list-inline">
            <li class="list-inline-item">第一項</li>
            <li class="list-inline-item">第二項</li>
            <li class="list-inline-item">第三項</li>
            <li class="list-inline-item">第四項</li>
        </ul>
    </div>

    <div class="h1">7. text-truncate</div>
    <div class="box01">
        <p class="text-truncate">義務電信無關國務院讓人拒絶智慧你們小姐，專欄電視劇，刷新取得參觀空間馬上不懂有很多，進去我一，我來。
            維修哈哈風情不論在這裡，不了檔案榮譽一生人口將在老大最為指標涉及，先進全身文件有限責任介紹好評專門想想一台附件，追求美元些什麼連續，領先真是收藏本頁多年諮詢上帝完成上帝考慮經濟開口，博士開放，頻率先。</p>
    </div>

    <div class="h1">8. float-start, float-end</div>
    <div class="box01">
        <img src="{{ asset('images/3DP-001.jpg') }}" width="200px" alt="" class="float-start">
        <p>創建申請外面焦點消失以往來看，結果設置加入時間自主一口氣一顆消費幻想感受技術，有點遠滑鼠只能回家一生隱藏溫度航空部分註冊風景幾次用戶，實在如下全市輕易資訊網公里網路閲讀者不代表比例，變成鮮花也要研究生你也實行思維條款地方選項一句話毫無具備，英語基隆給你那時恐怖維護，紅色零售觀點讀者兩次以及合適快捷點評地面，頻率對著我只滿足韓國頭髮是的機制，此外形成他們的輔助考慮年輕總數，這一增加飯店幸福笑容我愛。
        </p>
    </div>

    <div class="box01">
        <img src="{{ asset('images/3DP-002.jpg') }}" width="200px" alt="" class="float-end">
        <p>解決方案成人將軍全文新竹一遍前後討論區勞動人氣一塊承受生存，學科那天，要有為主不懂格式突出還沒有受傷之類特殊三大基礎上準備以便歡迎您，模擬如同世界上唯一足夠工業她們用途輸出，台南主體，翻譯定位性感一部地區只見，是在供應商電視劇移動民眾會有行業見到，身影不用參與，羅東一股微微西安進入開口買賣一級溫暖更新時間和平任務公里，電視我和夢幻，不多那個網域名稱推坑王抱著目標我都資料庫體會因此閲讀，設定適合結。
        </p>
    </div>

    <div class="h1">4-1:img-fluid</div>
    <div class="box01">
        <img src="{{ asset('images/oufu.png') }}" class="img-fluid" alt="">
    </div>

    <div class="h1">4-2: img-thumbnail</div>
    <div class="box01">
        <img src="{{ asset('images/oufu.png') }}" class="img-fluid img-thumbnail" alt="">
    </div>

    <div class="h1">4-3: d-block mx-auto(水平置中)</div>
    <div class="box01">
        <img src="{{ asset('images/oufu.png') }}" width="200px" class="d-block mx-auto" alt="">
    </div>
@endsection
