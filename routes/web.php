<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeCotroller;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\VacancyController;

use App\Http\Controllers\Users\IndexController;


Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/vacancy',[IndexController::class,'vacancy'])->name('vacancy');
Route::post('/vacancy/resume',[IndexController::class,'vacancyResume'])->name('vacancy.resume');

/**
 * Login Routes
 */
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');

});


Route::group(['middleware' => ['auth']], function () {
    Route::get('home', [HomeCotroller::class, 'index'])->name('admin.home');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('resume',[VacancyController::class,'index'])->name('resume');
    Route::get('resume/{id}/edit',[VacancyController::class,'edit'])->name('resume.edit');
    Route::put('resume/{id}',[VacancyController::class,'update'])->name('resume.update');
    Route::group(['middleware' => 'role:Admin'], function () {
        Route::resource('user', UsersController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('roles', RoleController::class);


    });
});
