<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\Admin\{AdminController, CategoryController, CourseController, ChapterController, TheoryController, TeamController};

use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\LandingPage\LandingPageController;

use App\Http\Controllers\User\UserController;

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

// * Auth
Route::controller(AuthController::class)->group(function () {
    Route::get('/registration','registration');
    Route::post('/registration','store');
    Route::get('/login','login')->name('login');
    Route::post('/login','authenticate');
    Route::post('/logout','logout');
});

// * Admin
Route::controller(AdminController::class)->middleware('auth')->group(function () {
    Route::get('/admin', 'index');
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('teams', TeamController::class)->middleware('auth');
    Route::resource('courses', CourseController::class)->middleware('auth');
    Route::resource('chapters', ChapterController::class)->middleware('auth');
    Route::resource('theories', TheoryController::class)->middleware('auth');
    Route::resource('categories', CategoryController::class)->middleware('auth');
});

// * LandingPage
Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/course', 'course');
    Route::get('/courses', 'courses');
    Route::get('/contacts', 'contacts');
    Route::get('/team', 'team');
});

// * Dashboard
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/learning', 'learning');
});

// * User
Route::controller(UserController::class)->group(function () {
    Route::get('/payment', 'payment');
    Route::get('/pay_confirm', 'pay_confirm');
    Route::post('/kelola', 'kelola');
});






