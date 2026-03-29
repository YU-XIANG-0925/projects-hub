@extends('layouts.app')

@section('title')
    表單 - 飲料訂購
@endsection

@section('other-styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection


@section('content')
    <div class="pb-5">
        <div class="display-3 py-3 my-4 fw-900 text-primary">飲料訂購</div>
        <div class="row">
            <div class="col-12">
                <form id="myForm">
                    <div class="mb-3">
                        <label for="" class="form-label">產品名稱</label>
                        <input type="text" class="form-control" id="user_name" placeholder="訂購者名稱(2-5字)" />
                        <div class="valid-feedback">輸入符合規定</div>
                        <div class="invalid-feedback">輸入不符合規定</div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">產品名稱</label>
                        <input type="text" class="form-control" id="product_name" placeholder="產品名稱(2-6字)" />
                        <div class="valid-feedback">輸入符合規定</div>
                        <div class="invalid-feedback">輸入不符合規定</div>
                    </div>
                    <div class="mb-3">
                        <select name="" id="theIce" class="form-select form-select-lg">
                            <option value="" class="text-center" disabled="" selected="">
                                ***請選擇冰塊***
                            </option>
                            <option value="正常冰">正常冰</option>
                        </select>
                    </div>

                    <div class="mb3"></div>
                    <button type="submit" class="btn btn-primary">
                        送出
                    </button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="mb-3">
                <label for="" class="form-label">數量:
                    <span class="text-success h2 fw-900" id="num_text">??</span>個</label>
                <input type="range" class="form-range" min="0" max="100" step="1" id="num"
                    value="50" />
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-4.0.0.js') }}"></script>
@endpush

@push('scripts')
    <script src="{{ asset('js/practice-20260226-ch11-forms-EX01.js') }}"></script>
@endpush
