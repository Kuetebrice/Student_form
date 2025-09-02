Route::put('/students/{student}', [StudentController::class, 'update'])->name('student.update');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\StudentController;

/* Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
 */
Route::get('/students',[StudentController::class,'index'])->name
('students.index');
Route::get('/students/create',[StudentController::class,'create'])->name
('student.create');
Route::post('/students',[StudentController::class,'store'])->name
('student.store');
Route::get('/students/{student}',[StudentController::class,'show'])->name('student.show');
// rout to show the edit form
route::get('/students/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
// rout to update the student
Route::put('/students/{student}',[StudentController::class,'update'])->name('student.update');