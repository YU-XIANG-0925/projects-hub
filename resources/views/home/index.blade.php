@extends('layouts.app')

@section('title', '首頁')

@section('content')
    <h1 class="mb-3">Hello, I’m Yu-Xiang</h1>
    <p class="text-muted">Personal portal / dashboard / resume.</p>

    <div class="d-flex gap-2">
        <a class="btn btn-primary" href="/projects">View Projects</a>
        <a class="btn btn-outline-secondary" href="/resume">View Resume</a>
    </div>
@endsection
