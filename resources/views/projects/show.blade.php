@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                    <h1 class="mb-2">{{ $project->title }}</h1>
                    @if ($project->summary)
                        <p class="text-muted mb-0">{{ $project->summary }}</p>
                    @endif
                </div>
                <span class="badge text-bg-light border">{{ $project->type }}</span>
            </div>

            <hr class="my-4">

            @if ($project->type === 'embed' && $project->embed_url)
                <h2 class="h5 mb-3">Live Preview</h2>
                <div class="card">
                    <div class="card-body p-0">
                        <iframe src="{{ $project->embed_url }}" title="{{ $project->title }}"
                            style="width:100%; height:70vh; border:0; border-radius: 12px;" loading="lazy">
                        </iframe>
                    </div>
                </div>
            @else
                <h2 class="h5 mb-3">Links</h2>
                <div class="d-flex flex-wrap gap-2">
                    @if ($project->demo_url)
                        <a class="btn btn-primary" href="{{ $project->demo_url }}" target="_blank" rel="noopener">Demo</a>
                    @endif
                    @if ($project->repo_url)
                        <a class="btn btn-outline-dark" href="{{ $project->repo_url }}" target="_blank"
                            rel="noopener">Repo</a>
                    @endif
                    @if (!$project->demo_url && !$project->repo_url)
                        <span class="text-muted">No links yet.</span>
                    @endif
                </div>
            @endif

            @if ($project->content)
                <hr class="my-4">
                <h2 class="h5 mb-3">Notes</h2>
                <div class="card">
                    <div class="card-body">{!! nl2br(e($project->content)) !!}</div>
                </div>
            @endif
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="h6 mb-3">Metadata</h2>

                    <div class="mb-2">
                        <div class="text-muted small">Slug</div>
                        <div class="fw-semibold">{{ $project->slug }}</div>
                    </div>

                    @if ($project->tech_stack)
                        <div class="mb-2">
                            <div class="text-muted small">Tech Stack</div>
                            <div class="fw-semibold">{{ $project->tech_stack }}</div>
                        </div>
                    @endif

                    <div class="mt-4">
                        <a class="btn btn-outline-secondary w-100" href="/projects">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
