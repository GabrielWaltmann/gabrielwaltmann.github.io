<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SkillsController;

Route::get('/api', [HelloController::class, 'index']);
Route::get('/api/csrf-token', function () {
    return csrf_token();
});
Route::post('/api/skills', [SkillsController::class, 'create']);
Route::get('/api/skills', [SkillsController::class, 'retrieves']);
Route::get('/api/skills/{id}', [SkillsController::class, 'retrievesOne']);
Route::put('/api/skills/{id}', [SkillsController::class, 'update']);
Route::delete('/api/skills/{id}', [SkillsController::class, 'delete']);
