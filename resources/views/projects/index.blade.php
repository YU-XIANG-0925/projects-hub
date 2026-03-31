@extends('layouts.app')

@section('title', 'Projects')

@section('content')
  <div class="d-flex align-items-end justify-content-between gap-3 mb-3">
    <div>
      <h1 class="mb-1">Projects</h1>
      <p class="text-muted mb-0">我的 side projects 清單 (hosted / external / embed)。</p>
    </div>
  </div>

  <div class="d-flex flex-wrap gap-2 mb-4">
    <button class="btn btn-sm btn-outline-secondary active" id="filter-all" onclick="filterProjects('all')">全部</button>
    <button class="btn btn-sm btn-outline-dark" id="filter-github" onclick="filterProjects('github')">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" class="me-1" style="vertical-align:-1px;" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/>
      </svg>
      GitHub
    </button>
    <button class="btn btn-sm btn-outline-primary" id="filter-embed" onclick="filterProjects('embed')">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1" style="vertical-align:-1px;" xmlns="http://www.w3.org/2000/svg">
        <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
      </svg>
      Embed
    </button>
    <button class="btn btn-sm btn-outline-secondary disabled" aria-disabled="true" title="尚未實裝">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1" style="vertical-align:-1px;" xmlns="http://www.w3.org/2000/svg">
        <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
      </svg>
      尚未實裝
    </button>
  </div>

  @if($projects->isEmpty())
    <div class="alert alert-light border">目前還沒有專案資料 (Phase 2 會用 seed 先塞幾筆)。</div>
  @else
    <div class="row g-3" id="projects-grid">
      @foreach($projects as $p)
        <div class="col-md-6 col-lg-4" data-type="{{ $p->type }}">
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

<script>
function filterProjects(type) {
  const cards = document.querySelectorAll('#projects-grid [data-type]');
  cards.forEach(card => {
    card.style.display = (type === 'all' || card.dataset.type === type) ? '' : 'none';
  });

  document.querySelectorAll('[id^="filter-"]').forEach(btn => btn.classList.remove('active'));
  const active = document.getElementById('filter-' + type);
  if (active) active.classList.add('active');
}
</script>
@endsection
