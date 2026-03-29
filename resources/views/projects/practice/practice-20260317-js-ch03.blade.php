@extends('layouts.app')

@section('title', 'js - 程式課程')

@section('content')

@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-4.0.0.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@11.js') }}"></script>
    <script src="{{ asset('js/loadMarketData.js') }}"></script>

    <script>
        const clearData = targets.map((item) => {
            const newItem = {};
            for (const key in item) {
                if (Object.hasOwn(item, key)) {
                    newItem[key] = normalize(item[key]);
                }
            }
            return newItem;
        });
        // console.log("整理後的資料:", clearData);
        const result = clearData.filter((item) => {
            return item.市場名稱 === '(停)建國市場' && item.文旦 !== "沒有資料";
        });
        console.log("篩選條件: 市場名稱為建國市場且文旦有資料", "篩選後的資料:", result);
        

        function normalize(data) {
            const trimmedData = (data ?? '').trim();
            return (trimmedData === '' || trimmedData === '0') ? "沒有資料" : trimmedData;
        };
        
    </script>
@endpush
