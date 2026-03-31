@extends('layouts.app')

@section('title', '首頁')

@section('content')
    <h1 class="mb-3">Hello, I'm Yu-Xiang</h1>
    <p class="text-muted">Personal portal / dashboard / resume.</p>

    <div class="d-flex gap-2">
        <a class="btn btn-primary" href="/projects">View My Projects</a>
        <a class="btn btn-secondary" href="/resume">View My Resume</a>
        {{-- 
        <a class="btn btn-success" href="/projects/practice/practice-20260317-js-ch03-ex02-hotellist">今日課程 - js-ch03-ex02-hotellist</a>
        <a class="btn btn-info" href="/projects/practice/practice-20260317-js-ch03-ex03-hotellist">今日課程練習 - js-ch03-ex03-hotellist</a>
        <a class="btn btn-outline-success" href="/projects/practice/practice-20260310-CRUD-index">CRUD練習1 - CRUD-index-action版</a>
        <a class="btn btn-outline-success" href="/projects/practice/practice-20260310-CRUD-showTable">CRUD練習2 - CRUD-table-ajax版</a> --}}
    </div>
@endsection
