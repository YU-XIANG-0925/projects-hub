@extends('layouts.app')

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
        <div class="col-md-8 bg-cover" style="background-image: url({{ asset('images/oufu.png') }})"></div>
        <div class="col-md-4">
            <div class="d-flex flex-column h-100 row">
                <div class="h-50 bg-cover" style="background-image: url({{ asset('images/oufu.png') }});"></div>
                <div class="h-50 bg-cover" style="background-image: url({{ asset('images/oufu.png') }});"></div>
            </div>
        </div>
    </div>
    </div>
@endsection
