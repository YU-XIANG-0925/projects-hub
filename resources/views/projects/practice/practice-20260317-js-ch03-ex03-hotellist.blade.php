@extends($layout ?? 'layouts.app')

@section('title', 'js - 程式練習')

@section('content')
    <div class="" id="hotelList" data-json-url="{{ asset('json/HotelList.json') }}"></div>
    <div class="" id="cityCountyData" data-json-url="{{ asset('json/CityCountyData.json') }}"></div>
    <div class="" id="imageData" data-json-url="{{ asset('images/oufu.png') }}"></div>
    <div class="row justify-content-center">
        <div class="row mt-5">
            <div class="col-md-6">
                <select name="" id="citySelect" class="form-select form-select-lg" @selected(true)>
                    <option value="">請選擇城市</option>
                </select>
            </div>
            <div class="col-md-6">
                <select name="" id="townSelect" class="form-select form-select-lg" disabled>
                    <option value="">請選擇鄉鎮區</option>
                </select>
            </div>

            <nav class="mt-4">
                <ul class="pagination justify-content-center" id="pagination"></ul>
            </nav>
            <div class="row row-cols-4 g-3" id="hotelCardContainer">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images\oufu.png') }}" alt="" class="card-img-top"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <div class="h4 mt-1 mb-1">
                                飯店名稱
                            </div>
                            <div class="mb-2">
                                <div class="text-muted small">地址</div>
                                <div class="fw-semibold"></div>
                            </div>
                            <div class="mb-2">
                                <div class="text-muted small">電話</div>
                                <div class="fw-semibold"></div>
                            </div>
                            <div class="mb-2">
                                <div class="text-muted small">簡介</div>
                                <div class="fw-semibold"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-4.0.0.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@11.js') }}"></script>
@endpush

@push('scripts')
    <script src="{{ asset('js/practice-20260317-js-ch3-ex03-loadHotelData.js') }}"></script>
@endpush
