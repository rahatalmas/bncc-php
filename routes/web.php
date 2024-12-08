<?php


use App\Http\Controllers\Public\PublicGalleryController;
use App\Http\Controllers\Public\PublicHomeController;
use App\Http\Controllers\Public\PublicNoticeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderImageController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AuthController;


Route::get('/', [PublicHomeController::class,'index'])->name('public.home'); 

Route::get('/noticeboard', [PublicNoticeController::class,'getNotice'])->name('notice');

Route::get('/honourBoard', function () {
    return view('honorBoard');
});

Route::get('/gallery', [PublicGalleryController::class, 'index'])->name('public.gallery');

Route::get('/apply', function () {
    return view('public.applyFormBncc');
})->name('apply.form');


// Auth Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//form
Route::get('/students', [StudentController::class, 'index'])->name('students.index');  // List all students (pending and approved)
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');  // Show the form to create a new student
Route::post('/students', [StudentController::class, 'store'])->name('students.store');  // Store the new student
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');  // Show the form to edit a student
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');  // Update the student data
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');  // Delete a student

// Add new routes for approve and details
Route::patch('students/{id}/approve', [StudentController::class, 'approve'])->name('students.approve');  // Approve a student (set status to 'approved')
Route::get('students/{id}/details', [StudentController::class, 'show'])->name('students.details');  // Show student details page

    
Route::group(['middleware'=> 'auth'], function () {

        Route::get('/adminDashboard', function () {
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
        Route::get('/manageGallery', [GalleryImageController::class, 'index'])->name('gallery.index');
        Route::post('/gallery', [GalleryImageController::class, 'store'])->name('gallery.store');
        Route::delete('/gallery/{id}', [GalleryImageController::class, 'destroy'])->name('gallery.destroy');
//     
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