<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::view('/', 'home.index');

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{project:slug}', [ProjectController::class, 'show']);

Route::view('/resume', 'resume.index');
Route::view('/dashboard', 'dashboard.index');
Route::view('/profile', 'profile.index');

Route::view('/projects/practice/bmi-calculator', 'projects.practice.bmi-calculator');
