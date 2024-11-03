<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\WriterController;

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/', [CategoryController::class, 'index'])->name('home');

Route::get('/home', [CategoryController::class, 'index'])->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/categories/data-science', [CourseController::class, 'dataScience'])->name('categories.dataScience');
Route::get('/categories/network-security', [CourseController::class, 'networkSecurity'])->name('categories.networkSecurity');

Route::get('/writer', [WriterController::class, 'index'])->name('writer');
Route::get('/writer/{id}/courses', [WriterController::class, 'showCourses'])->name('writer.courses');

Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/popular', [CourseController::class, 'popular'])->name('popular');








