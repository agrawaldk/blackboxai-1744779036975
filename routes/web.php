<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Frontend routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');


use App\Http\Controllers\Admin\AdminController as AdminDashboardController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\AuthController;

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes with auth middleware
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

    // Classes management
    Route::get('/classes', [ClassController::class, 'index'])->name('admin.classes.index');
    Route::get('/classes/create', [ClassController::class, 'create'])->name('admin.classes.create');
    Route::post('/classes', [ClassController::class, 'store'])->name('admin.classes.store');
    Route::get('/classes/{id}/edit', [ClassController::class, 'edit'])->name('admin.classes.edit');
    Route::put('/classes/{id}', [ClassController::class, 'update'])->name('admin.classes.update');
    Route::delete('/classes/{id}', [ClassController::class, 'destroy'])->name('admin.classes.destroy');

    // Courses management
    Route::get('/courses', [AdminCourseController::class, 'index'])->name('admin.courses.index');
    Route::get('/courses/create', [AdminCourseController::class, 'create'])->name('admin.courses.create');
    Route::post('/courses', [AdminCourseController::class, 'store'])->name('admin.courses.store');
    Route::get('/courses/{id}/edit', [AdminCourseController::class, 'edit'])->name('admin.courses.edit');
    Route::put('/courses/{id}', [AdminCourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/courses/{id}', [AdminCourseController::class, 'destroy'])->name('admin.courses.destroy');
});
