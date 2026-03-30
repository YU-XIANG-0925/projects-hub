# Projects Hub

個人作品集與練習展示平台，使用 Laravel 12 建構。收錄作品集專案、30+ 個 Blade 練習頁面，以及基本的訂單 CRUD 系統。

## 技術堆疊

- **後端**：Laravel 12 / PHP 8.2+
- **前端**：Bootstrap 5.3 + TailwindCSS 4 + Vite
- **資料庫**：SQLite（預設）
- **語系**：台灣正體中文（zh-TW）

## 路由結構

| 路由 | 說明 |
|------|------|
| `/` | 首頁 |
| `/projects` | 作品集列表 |
| `/projects/{slug}` | 作品集詳細頁（route model binding） |
| `/projects/practice/{slug}` | 練習頁面（動態載入 Blade） |
| `/orders` | 訂單 CRUD |
| `/resume` | 履歷頁 |
| `/dashboard` | 儀表板 |
| `/profile` | 個人資料 |

## 專案架構

```
app/
├── Http/Controllers/
│   ├── ProjectController.php   # 作品集列表 & 詳細頁
│   └── OrderController.php     # 訂單 CRUD
├── Models/
│   ├── Project.php             # type: hosted | external | embed
│   └── Order.php               # username, pname, pnum
resources/views/
├── layouts/app.blade.php       # 共用版面（Bootstrap 5.3）
├── home/                       # 首頁
├── projects/
│   ├── index.blade.php         # 作品集列表
│   ├── show.blade.php          # 作品集詳細頁
│   └── practice/               # 30+ 練習頁面（新增只需加 .blade.php）
└── ...
```

## 新增練習頁面

只需在 `resources/views/projects/practice/` 下建立新的 Blade 檔案，即可透過 `/projects/practice/{slug}` 自動載入，無需修改路由。

## License

MIT
