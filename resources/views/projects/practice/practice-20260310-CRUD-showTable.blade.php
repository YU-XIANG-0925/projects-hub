@extends('layouts.app')

@section('title', 'CRUD 專案練習 - 顯示產品')
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
                            <li><a class="dropdown-item"
                                    href="{{ url('projects/practice/practice-20260310-CRUD-index') }}">新增產品</a></li>
                            <li><a class="dropdown-item active"
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
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="display-4 text-primary fw-900 mb-3 text-center">顯示產品列表</div>
                <table class="table table-bordered shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>編號</th>
                            <th>訂購者</th>
                            <th>品名</th>
                            <th>數量</th>
                            <th>建檔時間</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody id="mybody">
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>
                                <butoon class="btn btn-outline-warning" data-bs-toggle="modal"
                                    data-bs-target="#updateModal">更新</butoon>
                                <butoon class="btn btn-danger">刪除</butoon>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- updateModal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-bg-warning">
                    <h1 class="modal-title fs-5 fw-900" id="exampleModalLabel">產品更新</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="username" class="form-label">訂購者名稱</label>
                        <input type="text" class="form-control" placeholder="字數1~8" id="username" name="username"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">品名</label>
                        <input type="text" class="form-control" placeholder="字數1~8" id="pname" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">數量(數量1~10)</label>
                        <input type="number" min="1" max="10" value="1" class="form-control"
                            id="pnum">
                        <div class="valid-feedback">符合規定</div>
                        <div class="invalid-feedback">不符合規定</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" id="update_btn">確認更新</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-4.0.0.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@11.js') }}"></script>
    <script>
        let productDATA = []; //儲存所以資料
        let uid; //for update
        $(function() {
            //取得資料
            $.ajax({
                type: "GET",
                url: "{{route('orders.index')}}",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    productDATA = data;
                    console.log(productDATA);

                    renderTable(productDATA);
                },
                error: function() {
                    Swal.fire({
                        title: "讀取失敗",
                        text: "api連結: {{route('orders.index')}}",
                        icon: "error"
                    });
                }
            });

            //監聽table 更新按鈕 .updateBtn  資料來自於ajax必須要使用的監聽方法
            $(document).on("click", ".updateBtn", function() {
                console.log($(this).data("id"));
                console.log($(this).data("username"));
                console.log($(this).data("pname"));
                console.log($(this).data("pnum"));
                console.log($(this).data("createdat"));

                //放到modal表單
                uid = $(this).data("id");
                $("#username").val($(this).data("username"));
                $("#pname").val($(this).data("pname"));
                $("#pnum").val($(this).data("pnum"));
            });

            //監聽table 刪除按鈕 .deleteBtn  資料來自於ajax必須要使用的監聽方法
            $(document).on("click", ".deleteBtn", function() {
                Swal.fire({
                    title: "確認刪除?",
                    showDenyButton: true,
                    showCancelButton: false,
                    icon: "question",
                    confirmButtonText: "確認",
                    denyButtonText: `取消`
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log($(this).data("id"));
                        let delete_id = $(this).data("id");

                        //傳遞至後端api 執行刪除
                        $.ajax({
                            type: "DELETE",
                            url: `{{route('orders.index')}}/${delete_id}`,
                            dataType: "json",
                            success: function(data) {
                                console.log(data);
                                location.href = "20260310-CRUD-showTable.html";
                            },
                            error: function() {
                                Swal.fire({
                                    title: "刪除失敗",
                                    text: "api連結: {{route('orders.index')}}",
                                    icon: "error"
                                });
                            }
                        });
                    } else if (result.isDenied) {
                        return;
                    }
                });
            });

            //監聽modal 更新按鈕 #update_btn
            $("#update_btn").click(function() {
                let pnum = $("#pnum").val();

                console.log("id: " + uid);
                console.log("pnum: " + pnum);

                //傳遞至後端api 執行更新行為 PATCH  /posts/:id
                $.ajax({
                    type: "PATCH",
                    url: `{{route('orders.index')}}/${uid}`,
                    contentType: "application/json",
                    data: JSON.stringify({
                        pnum: pnum
                    }),
                    success: function(data) {
                        console.log(data);
                        console.log("更新成功!");

                        Swal.fire({
                            title: "更新成功!",
                            showDenyButton: false,
                            showCancelButton: false,
                            icon: "success",
                            confirmButtonText: "確認",
                            denyButtonText: `Don't save`
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.href = "{{ url('projects/practice/practice-20260310-CRUD-showTable') }}";
                            }
                        });
                    },
                    error: function() {
                        Swal.fire({
                            title: "更新失敗",
                            text: "api連結: {{route('orders.index')}}",
                            icon: "error"
                        });
                    }
                });
            });
        });

        function renderTable(data) {
            data.forEach(function(item) {
                let strHTML = `<tr>
                            <td>${item.id}</td>
                            <td>${item.username}</td>
                            <td>${item.pname}</td>
                            <td>${item.pnum}</td>
                            <td>${item.createdAt}</td>
                            <td>
                                <butoon 
                                    class="btn btn-outline-warning updateBtn" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#updateModal" 
                                    data-id="${item.id}" 
                                    data-username="${item.username}"
                                    data-pname="${item.pname}"
                                    data-pnum="${item.pnum}"
                                    data-createdat="${item.createdAt}"
                                    data-username>更新</butoon>
                                <butoon class="btn btn-danger deleteBtn" data-id="${item.id}">刪除</butoon>
                            </td>
                        </tr>`;
                $("#mybody").append(strHTML);
            });
        }
    </script>
@endpush
