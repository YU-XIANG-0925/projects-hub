@extends($layout ?? 'layouts.app')

@section('other-styles')
    <style>
        .section01 {
            background-color: var(--hero-blue-dark);
            height: 100vh;
            position: relative;
        }

        .section01 .box01 {
            width: 200px;
            height: 200px;
            background-color: var(--skin-and-light);
            position: absolute;
            top: 0;
            left: 0;
        }

        .section01 .box01:hover {
            background-color: var(--skin-and-light-dark);
            top: 200px;
            left: 200px;
            transition: all 1s;
        }

        .section01 .box02 {
            width: 200px;
            height: 200px;
            background-color: var(--skin-and-light);
            position: absolute;
            top: 0;
            right: 0;
        }

        .section01 .box02:hover {
            background-color: var(--skin-and-light-dark);
            top: 200px;
            right: 200px;
            transition: all 1s;
        }

        .section01 .box03 {
            width: 200px;
            height: 200px;
            background-color: var(--skin-and-light);
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .section01 .box03:hover {
            background-color: var(--skin-and-light-dark);
            bottom: 200px;
            left: 200px;
            transition: all 1s;
        }

        .section01 .box04 {
            width: 200px;
            height: 200px;
            background-color: var(--skin-and-light);
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .section01 .box04:hover {
            background-color: var(--skin-and-light-dark);
            bottom: 200px;
            right: 200px;
            transition: all 1s;
        }

        .userImg {
            /* background-color: var(--hero-blue); */
            background-image: url(images/oufu.png);
            background-size: cover;
            position: absolute;
            top: 50px;
            bottom: 50px;
            left: 50px;
            right: 50px;
        }

        .userText {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 245, 224, 0.1);
            color: var(--ink-shadow);
            padding: 10px;
            border-radius: 30px;
            box-shadow: 1px 1px 2px 1px var(--ink-shadow-dark);

        }

        .userText h3 {
            color: var(--crimson-strike);
        }

        .userText p {
            font-size: 18px;
        }

        .section02 {
            position: relative;
            height: 400px;
            background-color: var(--hero-blue-light);
        }

        .section02 .box01 {
            position: absolute;
            width: 300px;
            height: 300px;
            background-color: var(--golden-era);
            box-shadow: 2px 2px 3px 2px var(--golden-era-dark);
            border-radius: 50%;
            left: 20px;
            top: 20px;
            text-align: center;
            line-height: 300px;
        }

        .section02 .box01 a {
            text-decoration: none;
            font-size: 30px;
            color: var(--ink-shadow);
        }

        .section02 .box01:hover {
            background-color: var(--golden-era-light);
            transform: scale(1.1);
            transition: all 0.2s;
        }
    </style>
@endsection

@section('content')
    <div class="section01">
        <div class="box01"></div>
        <div class="box02"></div>
        <div class="box03"></div>
        <div class="box04"></div>
        <div class="userImg"></div>
        <div class="userText">
            <h1>劉宇翔</h1>
            <hr>
            <h3>曬狗照</h3>
            <p>牠是我女朋友的狗，牠的名字叫做歐福</p>
            <p>指出用於最高是以十二一系列，可以對象先後基礎股份中每個遠程立刻咖啡女性新竹背後出現。</p>
        </div>
    </div>
    <div class="section02">
        <div class="box01"><a href="#" target="_blank" rel="noopener noreferrer">作品 1</a></div>
        <div class="box02"></div>
        <div class="box03"></div>
    </div>
@endsection
