@extends('layouts.app')

@section('title', 'Projects')

@section('content')
  <div class="d-flex align-items-end justify-content-between gap-3 mb-3">
    <div>
      <h1 class="mb-1">Projects</h1>
      <p class="text-muted mb-0">我的 side projects 清單 (hosted / external / embed)。</p>
    </div>
  </div>

  @if($projects->isEmpty())
    <div class="alert alert-light border">目前還沒有專案資料 (Phase 2 會用 seed 先塞幾筆)。</div>
  @else
    <div class="row g-3">
      @foreach($projects as $p)
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 hover-lift">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-start gap-2">
                <h5 class="card-title mb-2">{{ $p->title }}</h5>
                <span class="badge text-bg-light border">{{ $p->type }}</span>
              </div>

              @if($p->summary)
                <p class="card-text text-muted">{{ $p->summary }}</p>
              @endif

              <a class="btn btn-sm btn-primary" href="{{ asset('/projects/' . $p->slug) }}">View</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif
@endsection
