# Log: Projects(資料庫驅動) show.blade.php 示範

## 目標
基於目前專案狀態(Laravel 12 + Blade + Bootstrap 骨架)，示範一個由資料庫驅動的 `/projects/{project:slug}` 流程，並使用 `projects/show.blade.php` 進行渲染。

## 限制條件
- 不預設存在任何額外的資料表(只以 Laravel 預設為基準)。
- 示範要最小化但是真實可運作(包含 route model binding + controller + migration + seed)。

## 計畫
1) 新增 `Project` model + migration。
2) 新增 `ProjectController`(index + show)。
3) 更新 routes，改成使用 controller + `{project:slug}`。
4) 更新 `projects/index.blade.php` 與 `projects/show.blade.php`，讓它們渲染 DB 資料。
5) 新增 BMI 練習頁(Blade)，並讓示範用的專案用 iframe 內嵌這個頁面。
6) 若 DB 已準備好就執行 migration/seed；否則記錄失敗原因並提供下一步修正方式。

## 變更內容
- 新增 `Project` model + migration(建立 projects 資料表)。
- 新增 `ProjectController`，提供 DB 驅動的 `index()` 與 `show()`。
- 調整路由:
  - `GET /projects` -> 由 controller 處理
  - `GET /projects/{project:slug}` -> 使用 route model binding
- 更新 views:
  - `projects/index.blade.php` 渲染 DB 列表
  - `projects/show.blade.php` 渲染單一 project 資料
- 新增 BMI 練習頁:
  - `GET /projects/practice/bmi-calculator` -> `projects/practice/bmi-calculator.blade.php`

## 驗證
- `/projects` 應該會列出 `BMI Calculator`。
- `/projects/bmi-calculator` 應該會渲染 `projects/show.blade.php`，並用 iframe 內嵌練習頁。

## 修正項目(Fixups)
- 透過在 `app/Models/Project.php` 加入 `$fillable` 修正 `MassAssignmentException`。
- 用 `tinker updateOrCreate` 建立示範資料 `bmi-calculator`(type=embed)。

## 本機驗證(Local verification)
- `GET /projects` -> 應該會列出 BMI Calculator
- `GET /projects/bmi-calculator` -> 應該會渲染 show.blade.php 並顯示 iframe
- `GET /projects/practice/bmi-calculator` -> 應該會顯示練習頁

## 備註
- 已移除暫時的備份檔: `routes/web.php.bak`
