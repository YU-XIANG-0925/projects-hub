@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="mb-3">Dashboard</h1>
    <p class="text-muted">控制面板(Phase 1 空殼，Phase 3/5 才加統計與監看)。</p>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-muted">Projects</div>
                    <div class="fs-3 fw-bold">0</div>
                </div>
            </div>
        </div>
    </div>
@endsection
