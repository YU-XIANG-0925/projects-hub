@extends($layout ?? 'layouts.app')

@section('title', 'ch05. 表格RWD 練習')

@section('other-links')
    <style>
        /* 頁面整體風格 */
        body {
            background-color: var(--skin-and-light-light);
            color: var(--ink-shadow);
        }

        .title-01 {
            background-color: var(--hero-blue);
            color: var(--golden-era);
            padding: 20px;
            font-size: 2.5rem;
            font-weight: 900;
            border-bottom: var(--border-thick);
            margin-bottom: 30px;
            text-shadow: 2px 2px var(--hero-blue-dark);
        }

        /* 表格自定義樣式 */
        .table {
            border: var(--border-thin);
            background-color: white;
        }

        .table-dark {
            --bs-table-bg: var(--hero-blue-dark);
            --bs-table-color: var(--golden-era-light);
        }

        /* RWD 斷點處理 (768px 以下) */
        @media screen and (max-width: 768px) {
            .table-rwd thead {
                display: none;
            }

            .table-rwd tbody tr {
                display: block;
                /* 使用 All Might 風格變數 */
                border: var(--border-thick);
                background-color: var(--skin-and-light);
                margin-top: 20px;
                padding: 10px;
                border-radius: 8px;
            }

            .table-rwd tbody tr td {
                display: block;
                border: none;
                padding-left: 50%;
                position: relative;
                text-align: right;
            }

            .table-rwd tbody tr td::before {
                content: attr(data-th) " : ";
                /* 使用英雄藍強調欄位名稱 */
                color: var(--hero-blue);
                font-size: 18px;
                font-weight: 900;
                position: absolute;
                left: 15px;
                text-align: left;
            }

            /* 針對圖片的特殊調整 */
            .table-rwd td[data-th="書本圖片"] img {
                max-width: 100%;
                height: auto;
            }
        }

        /* 動態表格容器間距 */
        #dataTable {
            margin-top: 50px;
        }
    </style>
@endsection

@section('content')
    <div class="title-01 text-center" id="mytitle">...</div>

    <div class="table-responsive-sm">
        <table class="table table-rwd">
            <thead class="table-dark">
                <tr>
                    <th>ISBN</th>
                    <th>書本圖片</th>
                    <th>書名</th>
                    <th>價格</th>
                    <th>數量</th>
                    <th>備註</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-th="ISBN">9789573317241</td>
                    <td data-th="書本圖片">
                        <img src="{{ asset('images/harrypotter/harrypotter01.png') }}" width="200px" alt="">
                    </td>
                    <td data-th="書名">哈利波特：神秘的魔法石</td>
                    <td data-th="價格"><s>280</s></td>
                    <td data-th="數量">42</td>
                    <td data-th="內容簡介">
                        <!-- 修正亂碼為可讀文字 -->
                        哈利波特在霍格華茲度過了不平凡的幾年，經歷了無數的冒險與挑戰。這本書將帶領讀者進入一個充滿魔法與奇蹟的世界，探索友誼、勇氣與愛的力量。
                    </td>
                </tr>
                <tr>
                    <td data-th="ISBN">9789573317586</td>
                    <td data-th="書本圖片">
                        <img src="{{ asset('images/harrypotter/harrypotter02.png') }}" width="200px" alt="">
                    </td>
                    <td data-th="書名">哈利波特：消失的密室</td>
                    <td data-th="價格"><s>488</s> -> 399</td>
                    <td data-th="數量">42</td>
                    <td data-th="備註">第2集 <br>
                        高度特色好看幹部腦袋，警方外掛指定在他設計從而類型渠道情形人氣資本影視...。
                    </td>
                </tr>
                <tr>
                    <td data-th="ISBN">9789573318002</td>
                    <td data-th="書本圖片">
                        <img src="{{ asset('images/3DP-001.jpg') }}" width="200px" alt="">
                    </td>
                    <td data-th="書名">蛋糕</td>
                    <td data-th="價格"><s>100</s></td>
                    <td data-th="數量">100</td>
                    <td data-th="備註">xxxx</td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr class="my-5" style="border-top: var(--border-thick);">

    <h3 class="fw-900 text-center mb-4" style="color: var(--crimson-strike);">農業部開放資料 (API)</h3>
    <div class="table-responsive">
        <table id="dataTable" class="table table-rwd table-striped">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">資料載入中，請稍候...</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-4.0.0.js') }}"></script>
    <script>
        $(function() {
            $("#mytitle").html("地方毛還需要協尋");

            $.ajax({
                type: "GET",
                url: "https://data.moa.gov.tw/Service/OpenData/TransService.aspx?UnitId=IFJomqVzyB0i&IsTransData=1",
                dataType: "json",
                success: showData,
                error: function() {
                    console.log("資料載入失敗");
                }
            });
        });

        function showData(items) {
            console.log(items);

            items.forEach(item => {
                let pic = item.PicURL ? item.PicURL : "images/oufu.png";
                let tel = item.Tel ? item.Tel : "暫無電話";
                let hostwords = item.HostWords ?
                    item.HostWords.substring(0, 30) :
                    "暫無介紹";
                let strHtml = `
<div class="col-md-6 col-lg-4 col-xl-3">
    <div class="content_box roller-l">
        <div class="roller-l_box" style="background-image: url('${pic}');">
            <button class="btn btn-primary">
                詳細資料
            </button>
        </div>
        <div
            style="
            background-image: url('${pic}');
            height: 160px;
            background-position: center center;
            background-size: cover;
            border-radius: 5px;">
        </div>
        <div class="h3 text-center fw-900">${item.Name}</div>
        <div class="h5">電話: ${tel}</div>
        <div class="h5">地址: ${item.City}${item.Town}${item.Address}</div>
        <p>介紹: ${hostwords}...</p>
    </div>
</div>`;
                $("#myrow").append(strHtml);
            });
        }
    </script>
@endpush
