<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('home.index');
});

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('courses', CourseController::class);

    Route::get('/course', function (){
        return view('components.course.index')->name('course');
    });


    Route::get('/pdfs', function (){
        return view('pdfs.index')->name('pdfs');
    });
    Route::get('/opportunities', function (){
        return view('opportunities.index')->name('opportunities');
    });
    Route::get('/blogs', function (){
        return view('blogs.index')->name('blogs');
    });

});




// Redirect root to dashboard if logged in, otherwise to login
//Route::get('/', function () {
//    return Auth::check() ? redirect()->route('dashboard') : redirect()->route('login');
//});

