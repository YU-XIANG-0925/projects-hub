@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <h1 class="mb-3">Projects</h1>
    <p class="text-muted">這裡之後會列出所有 side projects(hosted / external / embed)。</p>

    <div class="row g-3">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Demo Project</h5>
                    <p class="card-text text-muted">Placeholder card. 之後改成 DB 驅動。</p>
                    <a class="btn btn-sm btn-primary" href="/projects/demo-project">View</a>
                </div>
            </div>
        </div>
    </div>
@endsection
