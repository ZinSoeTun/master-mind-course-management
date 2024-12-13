<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('index');
Route::get('/user/about', [HomeController::class, 'about'])->name('about');
Route::get('/user/courses/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/user/courses/course', [HomeController::class, 'courses'])->name('courses');
Route::get('/user/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/user/contact/form',[ContactController::class,'contactForm'])->name('contact.form');




 //Authentication && Admin Routes
 Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/user/courses/join/{id}',[HomeController::class,'joinCourse'])->name('join.course');
});




  //Authentication && Admin Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin'
])->group(function () {
    Route::prefix('/admin/')->group(function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('home');

        //category routes
        Route::prefix('category/')->group(function () {
            Route::get('page', [CategoryController::class, 'creCategoryPage'])->name('category.page');
            Route::post('create', [CategoryController::class, 'creCate'])->name('category.create');
            Route::get('list', [CategoryController::class, 'cateList'])->name('category.list');
            Route::get('updatePage/{id}', [CategoryController::class, 'updateCatePage'])->name('category.updatePage');
            Route::put('update/{id}', [CategoryController::class, 'updateCate'])->name('category.update');
            Route::get('delete/{id}', [CategoryController::class, 'deleCate'])->name('category.delete');
        });


        //course routes
        Route::prefix('course/')->group(function () {
            Route::get('page', [CourseController::class, 'creCoursePage'])->name('course.page');
            Route::post('create', [CourseController::class, 'creCourse'])->name('course.create');
            Route::get('list', [CourseController::class, 'courseList'])->name('course.list');
            Route::get('detail/{id}', [CourseController::class, 'courseDetail'])->name('course.detail');
            Route::get('updatePage/{id}', [CourseController::class, 'updateCoursePage'])->name('course.updatePage');
            Route::put('update/{id}', [CourseController::class, 'updateCourse'])->name('course.update');
            Route::get('delete/{id}', [CourseController::class, 'deleCourse'])->name('course.delete');
        });

        //user routes
        Route::prefix('normalUser/')->group(function () {
            Route::get('list', [UserController::class, 'userList'])->name('admin.user.list');
            Route::get('detail/{id}', [UserController::class, 'userDetail'])->name('admin.user.detail');
            Route::get('promoteUser/{id}', [UserController::class, 'proAdmin'])->name('admin.user.promoteToAdmin');
            Route::get('delete/{id}', [UserController::class, 'userDele'])->name('admin.user.delete');
        });

        //admin routes
        Route::prefix('administrator/')->group(function () {
            Route::get('list', [AdminController::class, 'adminList'])->name('admin.adminRoute.list');
            Route::get('detail/{id}', [AdminController::class, 'adminDetail'])->name('admin.adminRoute.detail');
            Route::get('demoteAdmin/{id}', [AdminController::class, 'deUser'])->name('admin.adminRoute.promoteToAdmin');
            Route::get('delete/{id}', [AdminController::class, 'adminDele'])->name('admin.adminRoute.delete');
        });

        //contact routes
        Route::prefix('contact/')->group(function() {
            Route::get('list', [ContactController::class, 'contactsList'])->name('contact.list');
            Route::get('detail/{id}', [ContactController::class, 'contactDetail'])->name('contact.detail');
            Route::get('delete/{id}', [ContactController::class, 'contactDele'])->name('contact.delete');
        });
    });
});
