<?php
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

//'middleware' => 'auth:admin'
Route::group(['prefix'  =>  'admin', 'namespace' => 'Admin'], function () {

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    });

});
