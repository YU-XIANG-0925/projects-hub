@extends($layout ?? 'layouts.app')

@section('title')
    ch7. Flex
@endsection

@section('other-links')
    <style>
        .box01 {
            height: 120px;
            margin-top: 5px;
        }
    </style>
@endsection

@section('content')
        <div class="row roller-l">
            <div class="col-md-4 d-flex flex-column mt-3 ">
                <img src="{{ asset('images/3DP-001.jpg') }}" class="img-fluid" alt="" />
                <div class="h3">這是一個景點001</div>
                <p>
                    機制一大短信嚴重日本一下子臺灣添加也是加入時間，信號中有我愛龍岡授權方式效率陽光灣添加也是加入時間，信號中有我愛灣添加也是加入時間，信號中有我愛課程打擊，可見萬元一把大學一句，第二天。
                </p>
                <a href="" class="btn btn-success d-block mx-auto mt-auto">詳細資料</a>
            </div>
            <div class="col-md-4 d-flex flex-column mt-3">
                <img src="{{ asset('images/3DP-002.jpg') }}" class="img-fluid" alt="" />
                <div class="h3">這是一個景點002</div>
                <p>
                    機制一大短信嚴重日本一下子臺灣添加也是加入時間，信號中有我愛龍岡授權方式效率陽光課程打擊，可見萬元一把大學一句，第二天。
                </p>
                <a href="" class="btn btn-success d-block mx-auto mt-auto">詳細資料</a>
            </div>
            <div class="col-md-4 d-flex flex-column mt-3">
                <img src="{{ asset('images/3DP-003.jpg') }}" class="img-fluid" alt="" />
                <div class="h3">這是一個景點003</div>
                <p>
                    機制一大短信嚴重日本一灣添加也是加入時間，信號中有我愛下子臺灣添加也是加入時間，信號中有我愛龍岡授權方式效率陽光課程打擊，可見萬元一把大學一句，第二天。
                </p>
                <a href="" class="btn btn-success d-block mx-auto mt-auto">詳細資料</a>
            </div>
            <div class="col-md-4 d-flex flex-column mt-3">
                <img src="{{ asset('images/3DP-003.jpg') }}" class="img-fluid" alt="" />
                <div class="h3">這是一個景點004</div>
                <p>
                    機制一大短信嚴重日本一下子臺灣添加也是加入時間，信號中有我愛龍岡授權方式效率陽光灣添加也是加入時間，信號中有我愛灣添加也是加入時間，信號中有我愛課程打擊，可見萬元一把大學一句，第二天。
                </p>
                <a href="" class="btn btn-success d-block mx-auto mt-auto">詳細資料</a>
            </div>
            <div class="col-md-4 d-flex flex-column mt-3">
                <img src="{{ asset('images/3DP-002.jpg') }}" class="img-fluid" alt="" />
                <div class="h3">這是一個景點005</div>
                <p>
                    機制一大短信嚴重日本一下子臺灣添加也是加入時間，信號中有我愛龍岡授權方式效率陽光課程打擊，可見萬元一把大學一句，第二天。
                </p>
                <a href="" class="btn btn-success d-block mx-auto mt-auto">詳細資料</a>
            </div>
            <div class="col-md-4 d-flex flex-column mt-3">
                <img src="{{ asset('images/3DP-001.jpg') }}" class="img-fluid" alt="" />
                <div class="h3">這是一個景點006</div>
                <p>
                    機制一大短信嚴重日本一灣添加也是加入時間，信號中有我愛下子臺灣添加也是加入時間，信號中有我愛龍岡授權方式效率陽光課程打擊，可見萬元一把大學一句，第二天。
                </p>
                <a href="" class="btn btn-success d-block mx-auto mt-auto">詳細資料</a>
            </div>
        </div>
@endsection