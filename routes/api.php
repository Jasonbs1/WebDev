<?php


// routes/api.php

use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Example API routes
Route::middleware('auth:api')->group(function () {
    Route::resource('lecturers', LecturerController::class);
    Route::resource('reservations', ReservationController::class);
    Route::resource('collections', CollectionController::class);
    Route::resource('librarians', LibrarianController::class);
    Route::resource('students', StudentController::class);
});
