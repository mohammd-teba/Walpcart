<?php
//
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Admin;

Route::get('/login', [Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::get('/', function () {
    return redirect('admin/login');
});
Route::post('/login', [Admin\LoginController::class, 'login']);

Route::group(['middleware' => 'auth:admin'], function () {

    Route::get('/home', [Admin\HomeController::class, 'index']);
    Route::get('profile/{id}/edit', [Admin\ProfileController::class, 'index']);
//    Route::put('profile/{id}/edit', [Admin\ProfileController::class, 'update']);
    Route::post('/logout', [Admin\LoginController::class, 'logout']);

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [Admin\UserController::class, 'index']);
//        Route::get('/user-data', [Admin\UserController::class, 'anyData']);
//        Route::put('/user-status', [Admin\UserController::class, 'userActive']);
//        Route::get('/{id}/view', [Admin\UserController::class, 'view']);


    });

    Route::group(['prefix' => 'admins'], function () {
        Route::get('/', [Admin\AdminController::class, 'index']);
//        Route::get('/admin-data', [Admin\AdminController::class, 'anyData']);
//        Route::get('/{id}/view', [Admin\AdminController::class, 'view']);
//        Route::get('/admin-create', [Admin\AdminController::class, 'create']);
//        Route::post('/admin-create', [Admin\AdminController::class, 'store']);
//        Route::get('/admin-edit/{id}', [Admin\AdminController::class, 'edit']);
//        Route::put('/admin-edit/{id}', [Admin\AdminController::class, 'update']);
//        Route::delete('/{id}', [Admin\AdminController::class, 'delete']);
    });
    Route::group(['prefix' => 'services'], function () {
        Route::get('/', [Admin\ServiceController::class, 'index']);
    });
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [Admin\ProductController::class, 'index']);
    });


});
