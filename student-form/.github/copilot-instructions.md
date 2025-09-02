# Copilot Instructions for AI Agents

## Project Overview
This is a Laravel-based student registration and management system. The codebase follows standard Laravel conventions but has custom field names and workflows for student data.

## Architecture & Major Components
- **Controllers**: Main logic in `app/Http/Controllers/StudentController.php` for CRUD operations.
- **Models**: Student data is managed in `app/Models/Student.php`.
- **Views**: Blade templates in `resources/views/student/` for create, edit, index, and show pages.
- **Migrations**: Database schema in `database/migrations/2025_08_19_094021_create_students_table.php`.
- **Routes**: All web routes in `routes/web.php`.

## Data Flow
- Student registration, editing, and viewing are handled via form submissions to controller methods.
- All student fields are custom-named (e.g., `Student_Last_Name`, `Student_Home_Phone`, `militry_family_status`).
- Military status is an enum field and must be handled as such in forms and controllers.

## Developer Workflows
- **Migrations**: Run with `php artisan migrate` or `php artisan migrate:fresh`.
- **Testing**: Pest is present (`tests/`), but no custom instructions found; use standard Pest commands.
- **Debugging**: Use `storage/logs/laravel.log` for error and debug output.
- **Build/Serve**: Use `php artisan serve` for local development.

## Project-Specific Patterns
- All form fields in Blade views must match the `$fillable` array in `Student.php` and validation rules in the controller.
- Views use Bootstrap for styling.
- Success/error messages are shown using Blade conditionals at the top of forms.
- The student list (`index.blade.php`) and details (`show.blade.php`) use custom field names, not Laravel's default `name`/`email`.
- Edit forms must include all required fields, not just a subset.

## Integration Points
- No external APIs or services detected; all data is local to the database.
- No custom middleware or service boundaries found.

## Examples
- To add a new student field, update migration, model `$fillable`, controller validation, and all relevant Blade forms.
- To debug a form submission, check `storage/logs/laravel.log` and ensure all required fields are present in the form.

## Key Files
- `app/Http/Controllers/StudentController.php`
- `app/Models/Student.php`
- `resources/views/student/*.blade.php`
- `database/migrations/2025_08_19_094021_create_students_table.php`
- `routes/web.php`

---

If any section is unclear or missing important project-specific details, please provide feedback so this guide can be improved.
