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
//    Route::get('profile/{id}/edit', [Admin\ProfileController::class, 'edit']);
//    Route::put('profile/{id}/edit', [Admin\ProfileController::class, 'update']);
    Route::post('/logout', [Admin\LoginController::class, 'logout']);

});
