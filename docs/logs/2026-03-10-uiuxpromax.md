# UI/UX Pro Max 改版 Log（feat/openclaw-use-uiuxpromax）

## 原則
- 不改動既有 Blade 結構與 Bootstrap 使用方式（僅做 additive 改善）。
- 所有新增樣式與互動一律寫在獨立檔案：`public/css/app.css`、`public/js/app.js`。
- Layout 僅負責「掛載」資源，確保未來新增頁面可直接套用。

## 使用的設計系統來源（ui-ux-pro-max）
- 配色：Monochrome + blue accent
  - Background: `#FAFAFA`
  - Text: `#09090B`
  - Muted: `#3F3F46`
  - CTA: `#2563EB` (hover `#1D4ED8`)
- Typography：Archivo（標題）+ Space Grotesk（內文）

## 變更內容
1) 新增全站 CSS：`public/css/app.css`
- 新增色彩變數與字體設定
- Navbar 視覺強化（半透明 + blur + active state）
- Button/卡片 hover 微調（避免 layout shift）
- focus-visible 提升鍵盤可用性

2) 新增全站 JS：`public/js/app.js`
- Navbar active link 自動標記（不改 Blade 結構）
- prefers-reduced-motion 支援（加 class）

3) 掛載資源（layout）
- `resources/views/layouts/app.blade.php` 加入：
  - `<link rel="stylesheet" href="/css/app.css">`
  - `<script src="/js/app.js" defer></script>`

4) 小幅套用（不改結構）
- `resources/views/projects/index.blade.php`：對卡片新增 `hover-lift` class

## 驗證清單
- [ ] 重新整理首頁 `/`，確認字體/配色生效
- [ ] 切換到 `/projects`，確認 navbar active 樣式
- [ ] 卡片 hover 不造成 layout shift
- [ ] 鍵盤 tab 有清楚 focus
