@extends($layout ?? 'layouts.app')

@section('title')
    ch7. Flex
@endsection

@section('other-links')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .box01 {
            height: 120px;
            margin-top: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="pt-5">

        <div class="title-01">1. Flex-row</div>
        <div class="row d-flex flex-row">
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>

        <div class="title-01">2. Flex-row-reverse</div>
        <div class="row d-flex flex-row-reverse">
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>

        <div class="title-01">3. Flex-column</div>
        <div class="row d-flex flex-column">
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>

        <div class="title-01">4. Flex-column-reverse</div>
        <div class="row d-flex flex-column-reverse">
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-3">
                <div class="box01 bg-primary">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>

        <div class="title-01">5. justify-content-start</div>
        <div class="row justify-content-start">
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">01</div>
                </div>
                F
            </div>
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>

        <div class="title-01">6. justify-content-center</div>
        <div class="row justify-content-center">
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>

        <div class="title-01">7. justify-content-end</div>
        <div class="row justify-content-end">
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>

        <div class="title-01">8. justify-content-around</div>
        <div class="row justify-content-around">
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>

        <div class="title-01">9. justify-content-between</div>
        <div class="row justify-content-between">
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-danger">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>

        <div class="title-01">10. align-items-**, align-self-**</div>
        <div class="row flex-column align-items-center">
            <div class="col-2 align-self-start">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-2 align-self-center">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-2 align-self-end">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
            <div class="col-2 align-self-center">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">04</div>
                </div>
            </div>
            <div class="col-2 align-self-start">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">05</div>
                </div>
            </div>
        </div>

        <div class="title-01">11. order-**</div>
        <div class="row flex-row">
            <div class="col-2 order-0">
                <div class="display-1 text-center">01</div>
            </div>
            <div class="col-2 order-1">
                <div class="display-1 text-center">02</div>
            </div>
            <div class="col-2 order-2">
                <div class="display-1 text-center">03</div>
            </div>
            <div class="col-2 order-3">
                <div class="display-1 text-center">04</div>
            </div>
            <div class="col-2 order-4">
                <div class="display-1 text-center">05</div>
            </div>
            <div class="col-2 order-5">
                <div class="display-1 text-center">06</div>
            </div>
        </div>
        <div class="title-01">11. order-**-test</div>
        <div class="row flex-row">
            <div class="col-2 order-sm-0 order-md-1 order-lg-2 order-xl-3 order-xxl-4">
                <div class="display-1 text-center">01</div>
            </div>
            <div class="col-2 order-sm-1 order-md-2 order-lg-3 order-xl-4 order-xxl-5">
                <div class="display-1 text-center">02</div>
            </div>
            <div class="col-2 order-sm-2 order-md-3 order-lg-4 order-xl-5 order-xxl-0">
                <div class="display-1 text-center">03</div>
            </div>
            <div class="col-2 order-sm-3 order-md-4 order-lg-5 order-xl-0 order-xxl-1">
                <div class="display-1 text-center">04</div>
            </div>
            <div class="col-2 order-sm-4 order-md-5 order-lg-0 order-xl-1 order-xxl-2">
                <div class="display-1 text-center">05</div>
            </div>
            <div class="col-2 order-sm-5 order-md-0 order-lg-1 order-xl-2 order-xxl-3">
                <div class="display-1 text-center">06</div>
            </div>
        </div>

        <div class="title-01">12. 推格子(水平) ms-*-auto, me-*-auto</div>
        <div class="row">
            <div class="col-2">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-2 ms-lg-auto">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>

        <div class="title-01">13. 推格子(垂直) mt-*-auto, mb-*-auto</div>
        <div class="row flex-column" style="height: 100vh">
            <div class="col-2 mb-xl-auto">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">01</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">02</div>
                </div>
            </div>
            <div class="col-2">
                <div class="box01 bg-warning">
                    <div class="display-1 text-center">03</div>
                </div>
            </div>
        </div>
    </div>
@endsection
