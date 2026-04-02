@extends($layout ?? 'layouts.app')

@section('title', 'ch06. 旅遊美食資料結構')

@section('other-links')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div class="row" id="myrow">
        <!-- 靜態範例資料 (等待 AJAX 載入) -->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="content_box roller-l">
                <div class="roller-l_box">
                    <button class="btn btn-primary">詳細資料</button>
                </div>
                <div
                    style="
                    background-image: url(https://picsum.photos/id/684/600/400);
                    height: 160px;
                    background-position:
                    center center;
                    background-size: cover;
                    border-radius: 5px;">
                </div>
                <div class="h3 text-center fw-900">餐廳名稱</div>
                <div class="h5">電話: 02-12345678</div>
                <div class="h5">地址: 台北市信義區...</div>
                <p>介紹: 這是一間非常美味的餐廳，歡迎大家來品嚐。</p>
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
                url: "{{ asset('json/TravelFood.json') }}",
                dataType: "json",
                success: showdata,
                error: function() {
                    console.log("error - json/TravelFood.json NOT FOUND");
                },
            });
        });

        function showdata(items) {
            console.log(items);

            items.forEach(item => {
                let pic = item.PicURL ? item.PicURL : "{{ asset('images/oufu.png') }}";
                let tel = item.Tel ? item.Tel : "暫無電話";
                let hostwords = item.HostWords ? item.HostWords.substring(0, 30) : "暫無介紹";
                let strHtml = `<div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="content_box roller-l">
                                    <div class="roller-l_box" style="background-image: url('${pic}');">
                                        <button class="btn btn-primary">
                                            詳細資料
                                        </button>
                                    </div>
                                    <div style="
                                    background-image: url('${pic}'); height: 160px;
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
