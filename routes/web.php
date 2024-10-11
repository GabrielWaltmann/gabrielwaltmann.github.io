<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ConfigsController;

// * pages
Route::get('/', function () {
    return view('home');
});

// * core
Route::get('/api', [HelloController::class, 'index']);
Route::get('/api/csrf-token', function () {
    return csrf_token();
});

// * skills
Route::post('/api/skills', [SkillsController::class, 'create']);
Route::get('/api/skills', [SkillsController::class, 'retrieves']);
Route::get('/api/skills/{id}', [SkillsController::class, 'retrievesOne']);
Route::put('/api/skills/{id}', [SkillsController::class, 'update']);
Route::delete('/api/skills/{id}', [SkillsController::class, 'delete']);

// * jobs
Route::post('/api/jobs', [JobsController::class, 'create']);
Route::get('/api/jobs', [JobsController::class, 'retrieves']);
Route::get('/api/jobs/{id}', [JobsController::class, 'retrievesOne']);
Route::put('/api/jobs/{id}', [JobsController::class, 'update']);
Route::delete('/api/jobs/{id}', [JobsController::class, 'delete']);

// * config
Route::post('/api/configs', [ConfigsController::class, 'create']);
Route::get('/api/configs', [ConfigsController::class, 'retrieves']);
Route::get('/api/configs/{key}', [ConfigsController::class, 'retrievesOne']);
Route::put('/api/configs/{key}', [ConfigsController::class, 'update']);
Route::delete('/api/configs/{key}', [ConfigsController::class, 'delete']);
