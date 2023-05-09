<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\Admin\{
    AdminController, 
    BookController,
    CategoryController, 
    CourseController, 
    ChapterController, 
    CollaborationController,
    PostController,
    TheoryController,
    TeamController,
    EnrollmentController,
};

use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\LandingPage\LandingPageController;
use App\Http\Controllers\MyProfileController;
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
    Route::get('/signup','registration')->middleware('guest');
    Route::post('/signup','store')->middleware('guest');
    Route::get('/login','login')->name('login')->middleware('guest');
    Route::post('/login','authenticate')->middleware('guest');
    Route::post('/logout','logout')->middleware('auth');
});

// * Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->middleware('auth', 'admin');
    Route::resource('teams', TeamController::class)->middleware('auth', 'admin');
    Route::resource('courses', CourseController::class)->middleware('auth', 'admin');
    Route::resource('chapters', ChapterController::class)->middleware('auth', 'admin');
    Route::resource('theories', TheoryController::class)->middleware('auth', 'admin');
    Route::resource('categories', CategoryController::class)->middleware('auth', 'admin');
    Route::resource('collaborations', CollaborationController::class)->middleware('auth', 'admin');

    Route::resource('enrollment', EnrollmentController::class)->middleware('auth', 'admin');
    Route::post('enrollment/confirm', [EnrollmentController::class, 'confirm'])->middleware('auth', 'admin');

    Route::resource('posts', PostController::class)->middleware('auth', 'admin');
    Route::get('posts/checkSlug', [PostController::class, 'checkSlug'])->middleware('auth');

    Route::resource('books', BookController::class)->middleware('auth', 'admin');
    Route::get('books/checkSlug', [BookController::class, 'checkSlug'])->middleware('auth');
});

// * LandingPage
Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/book/{book:slug}', 'book');
    Route::get('/books', 'books');
    Route::get('/course', 'coursedefault');
    Route::get('/course/{id}', 'course');
    Route::get('/courses', 'courses');
    Route::get('/contacts', 'contacts');
    Route::get('/team', 'team');
    Route::get('/posts', 'posts');
    Route::get('posts/{post:slug}', 'single_post');
});

// * Dashboard
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->middleware('auth');
    Route::get('/course/{course:id}/learn', 'learnCourse')->middleware('auth', 'student');
});

// * User
Route::controller(UserController::class)->group(function () {
    Route::get('/checkout/{course:id}', 'payment');
    Route::get('/checkout/{course:id}/confirm', 'checkout');
    Route::get('/pay_confirm', 'pay_confirm');
    Route::post('/kelola', 'kelola');
});

Route::resource('/myProfile',MyProfileController::class)->middleware('auth');






