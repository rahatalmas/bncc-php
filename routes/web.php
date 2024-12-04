<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderImageController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AuthController;

// Auth Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    
Route::group(['middleware'=> 'auth'], function () {


        Route::get('/', function () {
                // Get the authenticated user
                $user = Auth::user();
            
                // Return the dashboard view with the authenticated user data
                return view('dashboard', compact('user')); // Passing 'user' to the view
        })->name('dashboard');

        // Slider Images
        Route::get('/sliderimages', [SliderImageController::class, 'index'])->name('slider-images.index');
        Route::post('/sliderimages/post', [SliderImageController::class, 'store'])->name('slider-images.store');
        Route::delete('/sliderimages/delete/{id}', [SliderImageController::class, 'destroy'])->name('slider-images.destroy');
    
        // Gallery Images
        Route::get('/gallery', [GalleryImageController::class, 'index'])->name('gallery.index');
        Route::post('/gallery', [GalleryImageController::class, 'store'])->name('gallery.store');
        Route::delete('/gallery/{id}', [GalleryImageController::class, 'destroy'])->name('gallery.destroy');
    
        // Members
        Route::get('/members', [MemberController::class, 'index'])->name('members.index');
        Route::get('/members/create', [MemberController::class, 'create'])->name('members.create');
        Route::post('/members', [MemberController::class, 'store'])->name('members.store');
        Route::get('/members/{id}/edit', [MemberController::class, 'edit'])->name('members.edit');
        Route::put('/members/{id}', [MemberController::class, 'update'])->name('members.update');
        Route::delete('/members/{id}', [MemberController::class, 'destroy'])->name('members.destroy');
    
        // Notices
        Route::get('/notices', [NoticeController::class, 'index'])->name('notices.index');
        Route::post('/notices', [NoticeController::class, 'store'])->name('notices.store');
        Route::get('/notices/{id}/edit', [NoticeController::class, 'edit'])->name('notices.edit');
        Route::put('/notices/{id}', [NoticeController::class, 'update'])->name('notices.update');
        Route::delete('/notices/{id}', [NoticeController::class, 'destroy'])->name('notices.destroy');
});