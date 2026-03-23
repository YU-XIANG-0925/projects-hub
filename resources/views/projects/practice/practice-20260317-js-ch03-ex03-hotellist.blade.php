@extends('layouts.app')

@section('title', 'js - 程式練習')

@section('content')
    <div class="" id="hotelList" data-json-url="{{ asset('json/HotelList.json') }}"></div>
    <div class="" id="cityCountyData" data-json-url="{{ asset('json/CityCountyData.json') }}"></div>
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
