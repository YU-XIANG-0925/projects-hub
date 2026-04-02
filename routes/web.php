<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProjectController;

// Auth
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/', 'home.index');

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{project:slug}', [ProjectController::class, 'show']);

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Route::view('/resume', 'resume.index');
Route::view('/dashboard', 'dashboard.index');
Route::view('/profile', 'profile.index');

Route::group(['prefix' => 'projects/practice'], function () {
    Route::get('/{slug}', function (string $slug) {
        $viewPath = "projects.practice.{$slug}";
        abort_unless(view() -> exists($viewPath), 404);
        $layout = request()->boolean('embed') ? 'layouts.bare' : 'layouts.app';
        return view($viewPath, compact('layout'));
    });
});
