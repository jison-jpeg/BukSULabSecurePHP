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
    return view('pages.login');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/laboratories', function () {
    return view('pages.laboratory');
});
Route::get('/users', function () {
    return view('pages.user');
});
Route::get('/attendance', function () {
    return view('pages.attendance');
});
Route::get('/instructors', function () {
    return view('pages.instructor');
});
Route::get('/subjects', function () {
    return view('pages.subject');
});
Route::get('/schedules', function () {
    return view('pages.schedule');
});
Route::get('/reports', function () {
    return view('pages.report');
});
Route::get('/profile', function () {
    return view('pages.profile');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/reports', function () {
    return view('pages.report');
});
