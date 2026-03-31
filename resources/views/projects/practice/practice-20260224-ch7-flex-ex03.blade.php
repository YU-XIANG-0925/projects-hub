@extends($layout ?? 'layouts.app')

@section('title', 'ch7. Flex')
@section('other-styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/practice-20260224-ch7-flex-ex03.css') }}">
@endsection

</head>

@section('content')
    <div class="py-5">
        <div class="text-center mb-5">
            <h1 class="title-01 mb-3">XX 3D 列印工作室</h1>
            <p class="h4 fw-300" style="color: var(--hero-blue-light)">
                從想像到實體的進化歷程
            </p>
        </div>

        <div class="timeline-section">
            <!-- 第一階段 (左圖右文) -->
            <div class="row align-items-center timeline-section-pointer">
                <div class="col-md-6 mb-4 mb-md-0 px-4">
                    <!-- 套用 roller-l 效果 -->
                    <div class="roller-l">
                        <div class="pimg bg-cover"
                            style="
                                    background-image: url(images/3DP-001.jpg);
                                ">
                        </div>
                        <div class="roller-l_box">
                            <h4 class="fw-700">啟航與摸索</h4>
                            <p class="fw-300">單機原型的誕生</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-4">
                    <div class="timeline-text-box">
                        <span class="year-badge">2018</span>
                        <h3 class="title-02 mb-3">霓虹燈下的造夢起點</h3>
                        <p class="fw-500">
                            從一台基礎的 FDM 熱熔融沉積列印機開始。
                        </p>
                        <p>
                            在充滿霓虹燈光的個人工作室裡，看著噴頭一層層擠出優美的弧線，我們印出了第一個客製化測試件。
                        </p>
                        <p>
                            當時團隊專注於機台硬體調校、切片軟體參數的基礎累積，為早期的創客與設計系學生提供穩定且高品質的單件打樣服務，這份熱忱成為了我們成長的基石。
                        </p>
                    </div>
                </div>
            </div>

            <!-- 第二階段 (右圖左文) -->
            <div class="row align-items-center flex-row-reverse timeline-section-pointer">
                <div class="col-md-6 mb-4 mb-md-0 px-4">
                    <!-- 套用 roller-r 效果 -->
                    <div class="roller-r">
                        <div class="pimg bg-cover"
                            style="
                                    background-image: url(images/3DP-002.jpg);
                                ">
                        </div>
                        <div class="roller-r_box">
                            <h4 class="fw-700">產能大躍進</h4>
                            <p class="fw-300">微型列印農場成型</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-4">
                    <div class="timeline-text-box">
                        <span class="year-badge">2020</span>
                        <h3 class="title-02 mb-3">規模化量產啟動</h3>
                        <p class="fw-500">
                            從單打獨鬥，邁向陣列化的小批量生產 (Batch
                            Production)。
                        </p>
                        <p>
                            為了因應日益增長的商業訂單需求，我們一次性引進了多台主力機型，正式建立起小型的
                            3D 列印農場 (Print Farm)。
                        </p>
                        <p>
                            透過多機台同時運作與排程優化，我們突破了產能瓶頸，能夠在短時間內為客戶產出大量、規格統一且品質穩定的零部件，服務客群擴展至五金與電子零組件產業。
                        </p>
                    </div>
                </div>
            </div>

            <!-- 第三階段 (左圖右文) -->
            <div class="row align-items-center timeline-section-pointer">
                <div class="col-md-6 mb-4 mb-md-0 px-4">
                    <div class="roller-l">
                        <div class="pimg bg-cover"
                            style="
                                    background-image: url(images/3DP-003.jpg);
                                ">
                        </div>
                        <div class="roller-l_box">
                            <h4 class="fw-700">工藝極致</h4>
                            <p class="fw-300">挑戰幾何與精度的極限</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-4">
                    <div class="timeline-text-box">
                        <span class="year-badge">2022</span>
                        <h3 class="title-02 mb-3">挑戰複雜幾何結構</h3>
                        <p class="fw-500">
                            不只要求印得出來，更要求完美無瑕。
                        </p>
                        <p>
                            隨著技術純熟，我們不再滿足於基礎形狀。透過更精細的溫度控制、冷卻風道改裝與切片設定，我們開始專攻高難度的模型。
                        </p>
                        <p>
                            從螺旋花瓶、無支撐懸垂到複雜的精細卡榫，我們將
                            FDM
                            機台的潛力發揮到極致。精準的成型品質讓我們成功跨足特殊造型設計與高難度機構件的打樣市場，贏得客戶的高度信任。
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center flex-row-reverse timeline-section-pointer">
                <div class="col-md-6 mb-4 mb-md-0 px-4">
                    <div class="roller-r">
                        <div class="pimg bg-cover"
                            style="
                                    background-image: url(images/3DP-004.jpg);
                                ">
                        </div>
                        <div class="roller-r_box">
                            <h4 class="fw-700">智能製造</h4>
                            <p class="fw-300">AI LiDAR 與高速 CoreXY</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-4">
                    <div class="timeline-text-box">
                        <span class="year-badge">2024</span>
                        <h3 class="title-02 mb-3">AI 輔助與高速時代</h3>
                        <p class="fw-500">
                            邁入高科技自動化，追求工業級的良率與效率。
                        </p>
                        <p>
                            告別過去的純手工校正，我們全面導入配備 AI LiDAR
                            光達掃描與次世代高速 CoreXY 架構的高階旗艦機種。
                        </p>
                        <p>
                            新設備不僅讓列印速度翻倍成長，更能透過 AI
                            即時監測首層品質與列印瑕疵。結合封閉式溫控箱體，我們能完美列印
                            ABS、PC
                            等高階工程塑料，為客戶提供真正工業級、極致精準且高效的「智造」服務！
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
