<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index');
Route::view('/projects', 'projects.index');
Route::get('/projects/{project}', function (string $project) {
    return view('projects.show', ['project' => $project]);
});
Route::view('/resume', 'resume.index');
Route::view('/dashboard', 'dashboard.index');
Route::view('/profile', 'profile.index');
