@extends($layout ?? 'layouts.app')

@section('title', 'ch7. Flex')
@section('other-styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <style>
        .bg-cover {
            background-position: center center;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
        <div class="row">
            <div class="col-md-4 bg-cover"
                style="
                        background-image: url({{ asset('images/3DP-001.jpg') }});
                        height: 220px;
                    ">
            </div>
            <div class="col-md-4 bg-cover"
                style="
                        background-image: url({{ asset('images/3DP-002.jpg') }});
                        height: 220px;
                    ">
            </div>
            <div class="col-md-4 bg-cover"
                style="
                        background-image: url({{ asset('images/3DP-003.jpg') }});
                        height: 220px;
                    ">
            </div>
        </div>
        <div class="row vh-100">
            <div class="col-md-3">
                <div class="row d-flex flex-column h-100">
                    <div class="h-50 bg-cover" style="background-image: url({{ asset('images/3DP-004.jpg') }})"></div>
                    <div class="h-50 bg-cover" style="background-image: url({{ asset('images/3DP-005.jpg') }})"></div>
                </div>
            </div>
            <div class="col-md-6 bg-cover" style="background-image: url({{ asset('images/3DP-006.jpg') }})"></div>
            <div class="col-md-3">
                <div class="row d-flex flex-column h-100">
                    <div class="h-50 bg-cover" style="background-image: url({{ asset('images/3DP-007.jpg') }})"></div>
                    <div class="h-50 bg-cover" style="background-image: url({{ asset('images/3DP-008.jpg') }})"></div>
                </div>
            </div>
        </div>
        <div class="row vh-100">
            <div class="col-md-3 bg-cover" style="background-image: url({{ asset('images/3DP-009.jpg') }})"></div>
            <div class="col-md-3 bg-cover" style="background-image: url({{ asset('images/3DP-010.jpg') }})"></div>
            <div class="col-md-3 bg-cover" style="background-image: url({{ asset('images/3DP-011.jpg') }})"></div>
            <div class="col-md-3 bg-cover" style="background-image: url({{ asset('images/3DP-012.jpg') }})"></div>
        </div>
    </div>
@endsection