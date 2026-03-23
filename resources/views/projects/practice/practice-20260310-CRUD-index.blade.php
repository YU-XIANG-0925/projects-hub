@extends('layouts.app')

@section('title', 'CRUD 專案練習 - 新增產品')
@section('other-styles')
    <link rel="stylesheet" href="{{ asset('css/table-rwd.css') }}">
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-900 text-warning" href="#">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">首頁</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            產品維護
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item active"
                                    href="{{ url('projects/practice/practice-20260310-CRUD-index') }}">新增產品</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ url('projects/practice/practice-20260310-CRUD-showTable') }}">產品列表</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-bg-danger fw-900 h3 text-center">新增產品</div>
                    <div class="card-body">
                        {{-- <form method="post">
                            @csrf --}}
                        <div class="mb-3">
                            <label for="username" class="form-label">訂購者名稱</label>
                            <input type="text" class="form-control" placeholder="字數1~8" id="username" name="username">
                            <div class="valid-feedback">符合規定</div>
                            <div class="invalid-feedback">不符合規定</div>
                        </div>
                        <div class="mb-3">
                            <label for="pname" class="form-label">品名</label>
                            <input type="text" class="form-control" placeholder="字數1~8" id="pname" name="pname">
                            <div class="valid-feedback">符合規定</div>
                            <div class="invalid-feedback">不符合規定</div>
                        </div>
                        <div class="mb-3">
                            <label for="pnum" class="form-label">數量(數量1~10)</label>
                            <input type="number" min="1" max="10" value="1" class="form-control"
                                id="pnum" name="pnum">
                            <div class="valid-feedback">符合規定</div>
                            <div class="invalid-feedback">不符合規定</div>
                        </div>
                        <div class="text-center my-4">
                            <input class="btn btn-outline-secondary" type="reset" value="取消">
                            <input type="submit" class="btn btn-primary" id="ok_btn" value="確認">
                        </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-4.0.0.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@11.js') }}"></script>
    <script>
        let flag_username = false;
        let flag_pname = false;
        let flag_pnum = false;
        $(function() {
            $("#username").blur(function() {
                if ($(this).val().length > 0 && $(this).val().length < 9) {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                    flag_username = true;
                } else {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    flag_username = false;
                }
            })

            $("#pname").blur(function() {
                if ($(this).val().length > 0 && $(this).val().length < 9) {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                    flag_pname = true;
                } else {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    flag_pname = false;
                }
            })

            $("#pnum").blur(function() {
                if ($(this).val() > 0 && $(this).val() < 11) {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                    flag_pnum = true;
                } else {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    flag_pnum = false;
                }
            })

            $("#ok_btn").click(function() {
                if (flag_username && flag_pname && flag_pnum) {
                    //轉成json格式
                    let jsonData = {
                        username: $("#username").val(),
                        pname: $("#pname").val(),
                        pnum: $("#pnum").val(),
                        createdAt: new Date().toLocaleString()
                    };
                    console.log(JSON.stringify(jsonData));

                    //傳遞至後端API
                    $.ajax({
                        method: "POST",
                        url: "{{ route('orders.store') }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        contentType: "application/json",
                        data: JSON.stringify(jsonData),
                        success: function(data) {
                            console.log(data);

                            Swal.fire({
                                title: "新增成功!",
                                showDenyButton: false,
                                showCancelButton: false,
                                icon: "success",
                                confirmButtonText: "確認",
                                denyButtonText: `Don't save`
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    //清空輸入欄位
                                    $("#username").val("").blur();
                                    $("#pname").val("").blur();
                                    $("#pnum").val("1").blur();
                                    window.location.href = "{{ route('orders.index') }}";
                                }
                            });
                        },
                        error: function() {
                            Swal.fire({
                                title: "新增失敗",
                                text: "api連結: {{ route('orders.store') }}",
                                icon: "error"
                            });
                        }
                    });

                } else {
                    //欄位有錯誤 用sweetalert顯示提醒
                    Swal.fire({
                        title: "欄位有錯誤,請修正!",
                        showDenyButton: false,
                        showCancelButton: false,
                        icon: "error",
                        confirmButtonText: "確認",
                        denyButtonText: `Don't save`
                    }).then((result) => {
                        if (result.isConfirmed) {
                            return;
                        }
                    });
                }
            });
        });
    </script>
@endpush
