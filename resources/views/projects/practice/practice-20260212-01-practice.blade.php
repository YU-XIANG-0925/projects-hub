@extends($layout ?? 'layouts.app')

@section('title', 'ch06. 寵物遺失啟事列表')

@section('other-styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div class="row" id="myrow">
        <div class="h1 text-center">寵物遺失啟事列表</div>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="content_box roller-l">
                <div class="roller-l_box"
                    style="
                    background-image: url({{ asset('images/oufu.png') }});
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    height: 100%;
                    width: 100%;">
                    <button class="btn btn-primary">
                        查看更多
                    </button>
                </div>

                <div
                    style="
                    background-image: url({{ asset('images/oufu.png') }}); 
                    height: 160px;
                    background-position: center center;
                    background-size: cover;
                    border-radius: 5px;">
                </div>

                <div class="h3 text-center fw-900 mt-2">歐福 (博美)</div>
                <div class="h5">遺失時間: 沒有遺失</div>
                <div class="h5">連絡電話: 打給我就好</div>
                <div class="h5">遺失地點: 房間床上睡覺</div>
                <p class="text-muted">特徵: 笨笨的，還脫毛</p>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-4.0.0.js') }}"></script>
@endpush

@push('scripts')
    <script>
        $(function() {
            $.ajax({
                type: "GET",
                url: "{{ asset('json/TransService.json') }}",
                dataType: "json",
                success: showdata,
                error: function() {
                    console.log("error - json/TransService.json NOT FOUND");
                },
            });
        });

        function showdata(items) {
            console.log(items);

            items.forEach(item => {
                // 1. 處理圖片：如果 PICTURE 為空，則使用預設圖
                let pic = item.PICTURE ? item.PICTURE : "{{ asset('images/oufu.png') }}";

                // 2. 處理寵物名稱：如果為空，顯示「未命名」
                let petName = item.寵物名 ? item.寵物名 : "未命名";

                let strHtml = `
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="content_box roller-l">
                            <div class="roller-l_box" style="
                                background-image: url('${pic}');
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;
                                height: 100%;
                                width: 100%;
                                ">
                                <button class="btn btn-primary">
                                    查看更多
                                </button>
                            </div>
                            
                            <div style="
                                background-image: url('${pic}');
                                height: 160px;
                                background-position: center center;
                                background-size: cover;
                                border-radius: 5px;">
                            </div>

                            <div class="h3 text-center fw-900 mt-2">${petName} (${item.品種})</div>
                            <div class="h5">遺失時間: ${item.遺失時間}</div>
                            <div class="h5">連絡電話: ${item.連絡電話}</div>
                            <div class="h5">遺失地點: ${item.遺失地點}</div>
                            <p class="text-muted">特徵: ${item.特徵}</p>
                        </div>
                    </div>`;

                $("#myrow").append(strHtml);
            });
        }
    </script>
@endpush
