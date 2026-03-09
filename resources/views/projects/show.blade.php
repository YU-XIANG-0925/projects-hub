@extends('layouts.app')

@section('title', 'Project')

@section('content')
    <h1 class="mb-3">Project: {{ $project }}</h1>
    <p class="text-muted">專案詳細頁(Phase 1 先用路由參數，Phase 2 會改成 slug 查 DB)。</p>

    <div class="d-flex gap-2">
        <a class="btn btn-outline-secondary" href="/projects">Back</a>
        <a class="btn btn-outline-primary" href="#" onclick="return false;">Demo (TBD)</a>
        <a class="btn btn-outline-dark" href="#" onclick="return false;">Repo (TBD)</a>
    </div>
@endsection
