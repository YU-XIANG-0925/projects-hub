# Log: Projects (DB-backed) show.blade.php demo

## Goal
Demonstrate a DB-backed `/projects/{project:slug}` flow using `projects/show.blade.php`, based on the current project state (Laravel 12 + Blade + Bootstrap skeleton).

## Constraints
- Do not assume existing DB tables beyond Laravel defaults.
- Keep the demo minimal but real (route model binding + controller + migration + seed).

## Plan
1) Add `Project` model + migration.
2) Add `ProjectController` (index + show).
3) Update routes to use controller + `{project:slug}`.
4) Update `projects/index.blade.php` and `projects/show.blade.php` to render DB data.
5) Add a BMI practice page (Blade) and set the demo project to embed it.
6) Run migration/seed if DB is ready; otherwise record the failure and provide next-step fix.

## Changes
- Added `Project` model + migration (projects table).
- Added `ProjectController` with DB-backed `index()` and `show()`.
- Switched routes:
  - `GET /projects` -> controller
  - `GET /projects/{project:slug}` -> route model binding
- Updated views:
  - `projects/index.blade.php` renders DB list
  - `projects/show.blade.php` renders a single project record
- Added a BMI practice page:
  - `GET /projects/practice/bmi-calculator` -> `projects/practice/bmi-calculator.blade.php`

## Next: Run migration + seed

## Verify
- `/projects` should list `BMI Calculator`.
- `/projects/bmi-calculator` should render `projects/show.blade.php` and embed the practice page via iframe.

## Fixups
- Resolved `MassAssignmentException` by adding `$fillable` in `app/Models/Project.php`.
- Seeded demo record: `bmi-calculator` (type=embed) via `tinker updateOrCreate`.

## Local verification
- `GET /projects` -> should list BMI Calculator.
- `GET /projects/bmi-calculator` -> should render show.blade.php and iframe.
- `GET /projects/practice/bmi-calculator` -> should render the practice page.

## Notes
- Removed temporary backup file: `routes/web.php.bak`.
