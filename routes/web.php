<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('/registration','registration');
    Route::post('/registration','store');
    Route::get('/login','login');
    Route::post('/login','authenticate');
    Route::post('/logout','logout');
});

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/course', 'course');
    Route::get('/courses', 'courses');
    Route::get('/contacts', 'contacts');
    Route::get('/team', 'team');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/learning', 'learning');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/payment', 'payment');
    Route::get('/pay_confirm', 'pay_confirm');
    Route::post('/kelola', 'kelola');
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('teams', TeamController::class);
});





