<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\ApplicationAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('versity.home');
})->name('home');

Route::get('/versity/faculty_of_art', function () {
    return view('versity.faculty_of_art');
})->name('faculty_of_art');

Route::get('/versity/faculty_of_design', function () {
    return view('versity.faculty_of_design');
})->name('faculty_of_design');

Route::get('/versity/faculty_of_art_and_science', function () {
    return view('versity.faculty_of_art_and_science');
})->name('faculty_of_art_and_science');

Route::get('/application_reg', function () {
    return view('application.application_reg');
})->name('application_reg');

Route::get('/application_login', function () {
    return view('application.application_login');
})->name('application_login');

Route::post('application_reg', [ApplicationsController::class, 'getData']);

Route::post('application_login', [ApplicationAuth::class, 'applicationLogin']);

Route::get('/sendmail', [MailController::class, 'index']);
