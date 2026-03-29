@extends('layouts.app')

@section('other-styles')
    <style>
        .box-100 {
            width: 100px;
            height: 100px;
            /* 背景色：改用墨水陰影-淺色 */
            background: var(--ink-shadow-light);
            /* 陰影：改用墨水陰影-深色 */
            box-shadow: 5px 5px 10px 5px var(--ink-shadow-dark);
        }

        .box-32p {
            /* 背景色：改用英雄藍-淺色 (原 aqua) */
            background-color: var(--hero-blue-light);
            border-radius: 10px;
            margin: 2px;

            display: flex;
            justify-content: center;
            align-items: center;
            font: 20px sans-serif;
        }

        .box-32p:hover {
            /* 懸停背景：改用黃金時代-深色 (原 chocolate) */
            background-color: var(--golden-era-dark);
            transform: scale(0.85);
            transition: transform 0.5s;
        }

        .box-32p p:hover {
            /* 10:20分練習 hover 效果 */
            transform: scale(1.5);
            /* 放大 : 縮放比例 */
            transition: transform 0.5s;
            /* 過渡 : 變形(放大) 過渡時間*/
            border: 3px solid var(--ink-shadow-dark);
            /* 文字背景：改用皮膚光-淺色 */
            background-color: var(--skin-and-light-light);
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            grid-template-rows: repeat(3, 100px);
            /* 容器背景：改用皮膚光 (原 #7fffd4) */
            background-color: var(--skin-and-light);
            border-radius: 10px;
            padding: 10px;
        }
    </style>
@endsection

@section('content')
    <div class="box-100"></div>
    <br><br>
    <div class="container">
        <div class="box-32p"><p>1</p></div>
        <div class="box-32p"><p>2</p></div>
        <div class="box-32p"><p>3</p></div>
        <div class="box-32p"><p>4</p></div>
        <div class="box-32p"><p>5</p></div>
        <div class="box-32p"><p>6</p></div>
        <div class="box-32p"><p>7</p></div>
        <div class="box-32p"><p>8</p></div>
        <div class="box-32p"><p>9</p></div>
    </div>
@endsection