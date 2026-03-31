@extends('layouts.app')

@section('title', 'Resume — 劉宇翔')

@section('content')

    {{-- Header --}}
    <div class="d-flex align-items-start justify-content-between gap-3 mb-4">
        <div class="d-flex align-items-start gap-3">
            <img src="{{ asset('images/劉宇翔證件照.jpg') }}" alt="劉宇翔"
                style="width:auto; max-height: 200px; border-radius:8px; flex-shrink:0;">
            <div>
                <h1 class="mb-1">劉宇翔 <small class="text-muted fs-5 fw-normal">Yu-Xiang Liu</small></h1>
                <p class="text-muted mb-1">逢甲大學 資訊工程學系 碩士生 ／ 希望職稱：軟體工程師</p>
                <div class="d-flex flex-wrap gap-3 small text-muted">
                    <span><i class="bi bi-envelope me-1"></i>o20392o@gmail.com</span>
                    <span><i class="bi bi-telephone me-1"></i>0960-950-763</span>
                    <span><i class="bi bi-geo-alt me-1"></i>台中市北屯區</span>
                    <span><i class="bi bi-github me-1"></i>
                        <a href="https://github.com/YU-XIANG-0925" target="_blank" rel="noopener"
                            class="text-muted">YU-XIANG-0925</a>
                    </span>
                </div>
            </div>
        </div>
        <span class="badge text-bg-warning fs-6 flex-shrink-0">待業中</span>
    </div>

    {{-- 自我介紹 --}}
    <div class="card mb-4">
        <div class="card-body">
            <p class="mb-0">
                就讀逢甲大學資訊工程所，研究方向結合教育服務型機器人 (Kebbi) 與大語言模型 (LLM)，開發互動式演講教練系統，以教育科技輔助提升口語表達表現。
                開發重心在 PHP Laravel 框架的學習與應用，並主動學習 Claude Code、Gemini-Cli 及 Codex 等 AI 開發工具，以加速樣板產出，將精力投注在邏輯重構與系統架構設計。
            </p>
        </div>
    </div>

    <div class="row g-4">

        {{-- 左欄 --}}
        <div class="col-lg-8">

            {{-- 學歷 --}}
            <section class="mb-4">
                <h2 class="h5 border-bottom pb-2 mb-3">學歷</h2>
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <div class="fw-semibold">逢甲大學</div>
                        <div class="text-muted small">資訊工程學系｜碩士日間就讀中</div>
                    </div>
                    <span class="text-muted small flex-shrink-0">2023/9 ~ 2026/6</span>
                </div>
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fw-semibold">亞洲大學</div>
                        <div class="text-muted small">資訊工程學系｜大學畢業</div>
                    </div>
                    <span class="text-muted small flex-shrink-0">2019/9 ~ 2023/6</span>
                </div>
            </section>

            {{-- 工作經驗 --}}
            <section class="mb-4">
                <h2 class="h5 border-bottom pb-2 mb-3">工作經驗</h2>

                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fw-semibold">助教 <span class="badge text-bg-light border fw-normal ms-1">行政助理</span>
                            </div>
                            <div class="text-muted small">亞洲大學 資訊電機學院｜台中市霧峰區</div>
                        </div>
                        <span class="text-muted small flex-shrink-0">2020/9 ~ 2022/8（2年）</span>
                    </div>
                    <ul class="mt-2 mb-0 small">
                        <li>協助資訊電機學院助理處理日常校務（考試系統建置、校級影音資源整理、日常文書處理）</li>
                        <li class="text-muted">#Docker #Excel #文件檔案資料處理、轉換及整合工作</li>
                    </ul>
                </div>

                <div>
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fw-semibold">助教 <span class="badge text-bg-light border fw-normal ms-1">Python
                                    課程</span></div>
                            <div class="text-muted small">亞洲大學｜台中市霧峰區</div>
                        </div>
                        <span class="text-muted small flex-shrink-0">2020/4 ~ 2022/12（2年9個月）</span>
                    </div>
                    <ul class="mt-2 mb-0 small">
                        <li>開課期間於夜間加強課後輔導資訊科系學生 Python 程式能力，並於結訓週進行能力測驗</li>
                        <li class="fw-semibold">每期輔導至少八成學生通過能力測驗，抵認 Python 必修課程學分</li>
                    </ul>
                </div>
            </section>

            {{-- 專案成就 --}}
            <section class="mb-4">
                <h2 class="h5 border-bottom pb-2 mb-3">專案成就</h2>

                @php
                    $projects = [
                        [
                            'title' => 'Laravel — 學習作品集',
                            'period' => '2025/12 ~ 仍在進行',
                            'desc' => '學習 Laravel 後端框架期間所實作之各種練習及 Side Project。',
                            'url' => 'https://www.20230609.xyz',
                            'tags' => ['Laravel', 'PHP', 'Bootstrap'],
                        ],
                        [
                            'title' => '多功能 URL 影片下載器 — Python',
                            'period' => '2025/10 ~ 仍在進行',
                            'desc' =>
                                '以 Python tkinter + yt_dlp + ffmpeg 開發影片下載、重新編碼應用程式；後期配合 Cursor、Antigravity、Gemini-Cli 重構 UI，新增合併、剪輯功能。首次體驗 AI 協作開發。',
                            'url' => 'https://github.com/YU-XIANG-0925/URL-Video-Clip-Downloader-GUI',
                            'tags' => ['Python', 'tkinter', 'ffmpeg'],
                        ],
                        [
                            'title' => '第 13 屆 工程、技術與 STEM 教育研討會',
                            'period' => '2024/2 ~ 2024/5',
                            'desc' => '為第三作者，負責新版本重構以及修復已知 BUG。',
                            'url' => null,
                            'tags' => ['Java', 'Android Studio'],
                        ],
                        [
                            'title' => 'CodeCast AI：來聽一場 code review 的饗宴',
                            'period' => '2025/2 ~ 2025/6',
                            'desc' => '2025 台灣軟體工程研討會 軟體工程競賽 🥇 金獎。擔任輔助組員，負責協調整體架構。',
                            'url' => null,
                            'tags' => ['AI', 'TCSE 2025'],
                        ],
                        [
                            'title' => '水管家 — 水塔智慧監測與分析系統',
                            'period' => '2021/12 ~ 2022/6',
                            'desc' =>
                                '使用傳統市售液面控制器 + IoT 開發板監控水塔溢出、滿水、蓄水、低水位及空轉狀態，透過 Webhook 發送即時通知。榮獲 U21 創意商品競賽佳作。',
                            'url' => null,
                            'tags' => ['IoT', 'Webhook'],
                        ],
                        [
                            'title' => 'GitHub 個人頁面',
                            'period' => null,
                            'desc' => '3D 機器人動作展示專案 (重現與解密)',
                            'url' => 'https://yu-xiang-0925.github.io/static/robot/robot.html',
                            'tags' => ['HTML', 'CSS', 'GitHub Pages'],
                        ],
                        [
                            'title' => 'Research System Project',
                            'period' => null,
                            'desc' => '碩論系統之一',
                            'url' => 'https://github.com/YU-XIANG-0925/research-system-project',
                            'tags' => ['PHP', 'MySQL'],
                        ],
                        [
                            'title' => 'Emotional Labeling System',
                            'period' => null,
                            'desc' => '情緒標註系統，用於標記與分類文本或資料的情緒類別。',
                            'url' => 'https://github.com/YU-XIANG-0925/Emotional-labeling-system',
                            'tags' => ['Python'],
                        ],
                        [
                            'title' => 'GAI & Fullstack Class',
                            'period' => null,
                            'desc' => '生成式 AI 與全端開發課程練習作業與範例程式集。',
                            'url' => 'https://github.com/YU-XIANG-0925/gai-and-fullstack-class',
                            'tags' => ['Python', 'JavaScript'],
                        ],
                        [
                            'title' => 'Python DS Review',
                            'period' => null,
                            'desc' => 'Python 資料結構與演算法複習筆記與練習題集。',
                            'url' => 'https://github.com/YU-XIANG-0925/python-DS-review',
                            'tags' => ['Python'],
                        ],
                    ];
                @endphp

                @foreach ($projects as $proj)
                    <div class="mb-3 pb-3 {{ !$loop->last ? 'border-bottom' : '' }}">
                        <div class="d-flex justify-content-between align-items-start gap-2">
                            <div class="fw-semibold">
                                {{ $proj['title'] }}
                                @if ($proj['url'])
                                    <a href="{{ $proj['url'] }}" target="_blank" rel="noopener"
                                        class="ms-1 text-muted small">↗</a>
                                @endif
                            </div>
                            <span class="text-muted small flex-shrink-0">{{ $proj['period'] }}</span>
                        </div>
                        <p class="small text-muted mb-1 mt-1">{{ $proj['desc'] }}</p>
                        <div class="d-flex flex-wrap gap-1">
                            @foreach ($proj['tags'] as $tag)
                                <span class="badge text-bg-light border small">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </section>

            {{-- 社團 --}}
            <section class="mb-4">
                <h2 class="h5 border-bottom pb-2 mb-3">社團經歷</h2>
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fw-semibold">亞洲大學 3D 列印社</div>
                        <ul class="small text-muted mt-1 mb-0">
                            <li>2020 年擔任副社長，協助組織 12 位社員進行社課及校外創客基地參訪</li>
                            <li>2020 年疫情期間接任社長，推動遠距 3D 建模及分流式機台操作體驗（15 位社員）</li>
                            <li>2021 年協辦校內系學會交接儀式道具建模實作</li>
                        </ul>
                    </div>
                    <span class="text-muted small flex-shrink-0">2019/9 ~ 2022/1</span>
                </div>
            </section>

        </div>

        {{-- 右欄 --}}
        <div class="col-lg-4">

            {{-- 求職條件 --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="h6 mb-3">求職條件</h2>
                    <table class="table table-sm table-borderless small mb-0">
                        <tbody>
                            <tr>
                                <td class="text-muted pe-2">希望性質</td>
                                <td>全職、兼職、實習</td>
                            </tr>
                            <tr>
                                <td class="text-muted pe-2">可上班日</td>
                                <td>錄取後隨時可上班</td>
                            </tr>
                            <tr>
                                <td class="text-muted pe-2">希望待遇</td>
                                <td>面議</td>
                            </tr>
                            <tr>
                                <td class="text-muted pe-2">遠端工作</td>
                                <td>有意願</td>
                            </tr>
                            <tr>
                                <td class="text-muted pe-2">希望地點</td>
                                <td>台北、台中、新竹、桃園、新北、苗栗</td>
                            </tr>
                            <tr>
                                <td class="text-muted pe-2">希望職類</td>
                                <td>軟體／全端／後端／前端／AI 工程師</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- 技術專長 --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="h6 mb-3">技術專長</h2>
                    <div class="mb-2">
                        <div class="text-muted small mb-1">程式能力</div>
                        <div class="d-flex flex-wrap gap-1">
                            @foreach (['Python', 'JavaScript', 'PHP', 'Java'] as $s)
                                <span class="badge text-bg-secondary">{{ $s }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="text-muted small mb-1">後端</div>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge text-bg-danger">Laravel</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-muted small mb-1">前端</div>
                        <div class="d-flex flex-wrap gap-1">
                            @foreach (['HTML', 'jQuery', 'Bootstrap'] as $s)
                                <span class="badge text-bg-info text-dark">{{ $s }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- 證照 --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="h6 mb-3">證照</h2>
                    <ul class="small mb-0 ps-3">
                        <li>MTA 98-381 Introduction to Programming Using Python</li>
                        <li>Google Gemini Educator</li>
                        <li>普通重型機車駕照</li>
                        <li>普通小型車駕照</li>
                    </ul>
                </div>
            </div>

            {{-- 語言 --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="h6 mb-3">語言能力</h2>
                    <div class="small">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">中文</span>
                            <span class="text-muted">聽說讀：精通｜寫：中等</span>
                        </div>
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">台語</span>
                            <span class="text-muted">精通</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="fw-semibold">英文</span>
                            <span class="text-muted">略懂</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
