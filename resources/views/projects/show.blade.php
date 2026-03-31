@extends('layouts.app')

@section('title', $project->title)

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

                    @if ($project->summary)
                        <div class="mb-2">
                            <div class="text-muted small">Summary</div>
                            <div class="fw-semibold">{{ $project->summary }}</div>
                        </div>
                    @endif

                    <div class="mt-4">
                        <a class="btn btn-outline-secondary w-100" href="/projects">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @if ($project->type === 'embed' && $project->embed_url)
            <p class="h5 mb-3">Live Preview</p>
            <div class="card">
                <div class="card-body p-0">
                    <iframe src="{{ $project->embed_url }}?embed=1" title="{{ $project->title }}"
                        style="width:100%; height:70vh; border:0; border-radius: 12px;" loading="lazy">
                    </iframe>
                </div>
            </div>
        @elseif ($project->type === 'github' && $project->repo_url)
            @php
                $repoPath = parse_url($project->repo_url, PHP_URL_PATH);
                $ogImageUrl = 'https://opengraph.githubassets.com/1' . $repoPath;
            @endphp
            <p class="h5 mb-3">GitHub Repo</p>
            <div class="card overflow-hidden">
                <a href="{{ $project->repo_url }}" target="_blank" rel="noopener" class="text-decoration-none">
                    <img src="{{ $ogImageUrl }}" alt="{{ $project->title }}"
                        class="card-img-top" style="width:100%; display:block;">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <span class="fw-semibold text-dark">{{ $project->repo_url }}</span>
                        <span class="btn btn-outline-dark btn-sm ms-3 flex-shrink-0">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="me-1" style="vertical-align:-2px;" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/>
                            </svg>
                            在 GitHub 上查看
                        </span>
                    </div>
                </a>
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
@endsection
