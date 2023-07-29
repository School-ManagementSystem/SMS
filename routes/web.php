<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/admin_dashboard');
});

Route::get('/meals', function () {
    return view('admin/restaurant/meals');
});

Route::get('/student', function () {
    return view('student/student_dashboard');
});

Route::get('/borrow', function () {
    return view('student/library/borrow');
});

Route::get('/borrowed_books', function () {
    return view('student/library/borrowed');
});