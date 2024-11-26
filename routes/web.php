<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\AccessRequestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index'); // Admin Dashboard
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create'); // Create Admin Form
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store'); // Store Admin
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy'); // Delete Admin

// Librarian Routes
Route::prefix('librarian')->group(function () {
    Route::get('/', [LibrarianController::class, 'index'])->name('librarian.index');
    Route::get('/create', [LibrarianController::class, 'create'])->name('librarian.create');
    Route::post('/', [LibrarianController::class, 'store'])->name('librarian.store');
    Route::get('/{id}/edit', [LibrarianController::class, 'edit'])->name('librarian.edit');
    Route::put('/{id}', [LibrarianController::class, 'update'])->name('librarian.update');
    Route::delete('/{id}', [LibrarianController::class, 'destroy'])->name('librarian.destroy');
});

// Reminder Routes
Route::get('/reminders', [ReminderController::class, 'index'])->name('reminders.index'); // Reminder List
Route::post('/reminders', [ReminderController::class, 'store'])->name('reminders.store'); // Create Reminder
Route::put('/reminders/{id}', [ReminderController::class, 'update'])->name('reminders.update'); // Complete Reminder
Route::delete('/reminders/{id}', [ReminderController::class, 'destroy'])->name('reminders.destroy'); // Delete Reminder

// Reservation Routes
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index'); // Reservation List
Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit'); // Edit Reservation
Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update'); // Update Reservation
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy'); // Delete Reservation

// Collection Routes
Route::get('/collections', [CollectionController::class, 'index'])->name('collections.index'); // Collection List
Route::get('/collections/{id}/edit', [CollectionController::class, 'edit'])->name('collections.edit'); // Edit Collection
Route::put('/collections/{id}', [CollectionController::class, 'update'])->name('collections.update'); // Update Collection
Route::delete('/collections/{id}', [CollectionController::class, 'destroy'])->name('collections.destroy'); // Delete Collection

// Access Request Routes
Route::get('/access_requests', [AccessRequestController::class, 'index'])->name('access_requests.index'); // Access Request List
Route::get('/access_requests/create', [AccessRequestController::class, 'create'])->name('access_requests.create'); // Create Access Request
Route::post('/access_requests', [AccessRequestController::class, 'store'])->name('access_requests.store'); // Store Access Request
Route::put('/access_requests/{id}', [AccessRequestController::class, 'update'])->name('access_requests.update'); // Approve Access Request
Route::delete('/access_requests/{id}', [AccessRequestController::class, 'destroy'])->name('access_requests.destroy'); // Reject Access Request

// Student Management Routes (for Admin)
Route::prefix('admin/students')->group(function () {
    Route::get('/', [AdminController::class, 'studentsIndex'])->name('admin.students.index');
    Route::get('/create', [AdminController::class, 'createStudent'])->name('admin.createStudent');
    Route::post('/', [AdminController::class, 'storeStudent'])->name('admin.storeStudent');
    Route::get('/{id}/edit', [AdminController::class, 'editStudent'])->name('admin.editStudent');
    Route::put('/{id}', [AdminController::class, 'updateStudent'])->name('admin.updateStudent');
    Route::delete('/{id}', [AdminController::class, 'destroyStudent'])->name('admin.destroyStudent');
});

// Lecturer Management Routes (for Admin)
Route::prefix('admin/lecturers')->group(function () {
    Route::get('/', [AdminController::class, 'lecturersIndex'])->name('admin.lecturers.index');
    Route::get('/create', [AdminController::class, 'createLecturer'])->name('admin.createLecturer');
    Route::post('/', [AdminController::class, 'storeLecturer'])->name('admin.storeLecturer');
    Route::get('/{id}/edit', [AdminController::class, 'editLecturer'])->name('admin.editLecturer');
    Route::put('/{id}', [AdminController::class, 'updateLecturer'])->name('admin.updateLecturer');
    Route::delete('/{id}', [AdminController::class, 'destroyLecturer'])->name('admin.destroyLecturer');
});

// Student and Lecturer Resource Routes (for non-admin functionality)
Route::resource('students', StudentController::class);
Route::resource('lecturers', LecturerController::class);

// Add routes for viewing student's and lecturer's reservations
Route::get('students/{student}/reservations', [StudentController::class, 'showReservations'])->name('students.reservations');
Route::get('lecturers/{lecturer}/reservations', [LecturerController::class, 'showReservations'])->name('lecturers.reservations');

Route::middleware(['auth'])->group(function () {
    // Reservation Routes
    Route::resource('reservations', ReservationController::class);
    Route::get('reservations/create-for-student', [ReservationController::class, 'createForStudent'])->name('reservations.createForStudent');
    Route::get('reservations/create-for-lecturer', [ReservationController::class, 'createForLecturer'])->name('reservations.createForLecturer');

    // Collection Routes
    Route::resource('collections', CollectionController::class);

    // Access Request Routes (if you have them for reserving access)
    Route::resource('access_requests', AccessRequestController::class);
});
