@extends('layouts.app')

@section('title', $project->title)

<<<<<<< HEAD
@section('other-styles')
    <link rel="stylesheet" href="{{ asset('css/arrow_up_down.css') }}">
@endsection

@section('content')

    <div class="row row-cols-2 g-4">
        <div class="col-9">
            <div class="d-flex align-items-start justify-content-between gap-3">
                <div>
                    <h1 class="mb-2">{{ $project->title }}</h1>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="h4 mt-1 mb-0">MetaData</div>
                    <button class="metadata-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#metadata"
                        aria-expanded="true" aria-controls="metadata" aria-label="Toggle metadata">
                        <svg class="chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path d="M6 15L12 9L18 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <hr>
                <div class="card-body">
                    <div class="badge text-bg-light border">
                        {{ $project->type }}
                    </div>
                </div>
                <div class="card-body collapse show" id="metadata">
=======
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

>>>>>>> 92eeb023e0ee92a8e0a9d895de16536862903589
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

<<<<<<< HEAD
                    @if ($project->summary)
                        <div class="mb-2">
                            <div class="text-muted small">Summary</div>
                            <div class="fw-semibold">{{ $project->summary }}</div>
                        </div>
                    @endif

=======
>>>>>>> 92eeb023e0ee92a8e0a9d895de16536862903589
                    <div class="mt-4">
                        <a class="btn btn-outline-secondary w-100" href="/projects">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD

    <div class="row">
        @if ($project->type === 'embed' && $project->embed_url)
            <p class="h5 mb-3">Live Preview</p>
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
                    <a class="btn btn-outline-dark" href="{{ $project->repo_url }}" target="_blank" rel="noopener">Repo</a>
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
=======
>>>>>>> 92eeb023e0ee92a8e0a9d895de16536862903589
@endsection
