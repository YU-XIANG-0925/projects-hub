@extends($layout ?? 'layouts.app')

@section('title')
    ch11. 表單
@endsection

@section('other-links')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div class="pb-5">
        <div class="display-3 py-3 my-4 fw-900 text-primary">
            ch11 表單相關應用
        </div>

        <div class="h2 py-3 fw-900 text-secondary">1. 表單樣式(form)</div>
        <div class="row">
            <div class="col-12">
                <form id="myForm">
                    <div class="mb-3">
                        <label for="" class="form-label">帳號</label>
                        <input type="text" class="form-control" id="username01" placeholder="帳號字數1~6!" />
                        <div class="valid-feedback">輸入符合規定</div>
                        <div class="invalid-feedback">輸入不符合規定</div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">密碼</label>
                        <input type="password" class="form-control" id="password01" placeholder="密碼字數2~8!" />
                        <div class="valid-feedback">輸入符合規定</div>
                        <div class="invalid-feedback">輸入不符合規定</div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email01" placeholder="Email字數2~10!" />
                        <div class="valid-feedback">輸入符合規定</div>
                        <div class="invalid-feedback">輸入不符合規定</div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        送出
                    </button>
                </form>
            </div>
        </div>

        <hr class="my-5" />
        <div class="h2 py-3 fw-900 text-secondary">
            2. 表單樣式(不使用form)
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="" class="form-label">帳號</label>
                    <input type="text" class="form-control" id="username02" placeholder="帳號字數1~6!" />
                    <div class="valid-feedback">輸入符合規定</div>
                    <div class="invalid-feedback">輸入不符合規定</div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">密碼</label>
                    <input type="password" class="form-control" id="password02" placeholder="密碼字數2~8!" />
                    <div class="valid-feedback">輸入符合規定</div>
                    <div class="invalid-feedback">輸入不符合規定</div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email02" placeholder="Email字數2~10!" />
                    <div class="valid-feedback">輸入符合規定</div>
                    <div class="invalid-feedback">輸入不符合規定</div>
                </div>
                <button type="button" class="btn btn-primary" id="btn02">
                    送出
                </button>
                <div class="valid-feedback">輸入符合規定</div>
                <div class="invalid-feedback">輸入不符合規定</div>
            </div>
        </div>

        <hr class="mt-5" />
        <div class="h2 py-3 fw-900 text-secondary">3. select</div>
        <div class="row">
            <div class="col-12">
                <select name="" id="mycity" class="form-select form-select-lg">
                    <option value="" class="text-center" disabled="" selected="">
                        ***請選擇縣市***
                    </option>
                    <option value="臺中市">臺中市</option>
                    <option value="臺北市">臺北市</option>
                    <option value="臺南市">臺南市</option>
                </select>
            </div>
        </div>

        <div class="h4 mt-4 py-3 fw-900 text-danger">
            餐點選單練習(select)
        </div>
        <div class="row">
            <div class="col-12">
                <select name="" id="myfood" class="form-select form-select-lg">
                    <option value="" class="text-center" disabled="" selected="">
                        ***請選擇餐點***
                    </option>
                    <option value="炸醬麵01">炸醬麵01</option>
                </select>
            </div>
        </div>

        <hr class="md-5" />
        <div class="h2 py-3 fw-900 text-secondary">4. range</div>

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
    <script src="{{ asset('js/practice-20260226-ch11-forms.js') }}"></script>
@endpush
