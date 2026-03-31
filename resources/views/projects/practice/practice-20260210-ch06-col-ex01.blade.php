@extends($layout ?? 'layouts.app')

@section('title', '切版練習')

@section('other-styles')
    <style>
        .box {
            height: 100px;
            margin-top: 15px;
        }

        .box .display-3 {
            line-height: 100px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 d-md-none d-lg-block">
            <div class="box bg-success">
                <div class="fw-500 text-center display-3">header</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="box bg-warning">
                <div class="display-3 text-center fw-500">
                    01
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="box bg-warning">
                <div class="display-3 text-center fw-500">
                    02
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="box bg-warning">
                <div class="display-3 text-center fw-500">
                    03
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="box bg-warning">
                <div class="display-3 text-center fw-500">
                    04
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="box bg-warning">
                <div class="display-3 text-center fw-500">
                    05
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="box bg-warning">
                <div class="display-3 text-center fw-500">
                    06
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="box bg-danger">
                <div class="display-3 text-center fw-500">01</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="box bg-danger">
                <div class="display-3 text-center fw-500">02</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="box bg-danger">
                <div class="display-3 text-center fw-500">03</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="box bg-danger">
                <div class="display-3 text-center fw-500">04</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="box bg-danger">
                <div class="display-3 text-center fw-500">05</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="box bg-danger">
                <div class="display-3 text-center fw-500">06</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="box bg-danger">
                <div class="display-3 text-center fw-500">07</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="box bg-danger">
                <div class="display-3 text-center fw-500">08</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-md-none d-lg-block">
            <div class="box bg-info">
                <div class="fw-500 text-center display-3">footer</div>
            </div>
        </div>
    </div>
@endsection
