<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/skills', [SkillController::class, 'index'])->name('skills');

Route::get('/projects/main', [ProjectController::class, 'getMain'])->name('main_projects');
Route::get('/projects/{type}', [ProjectController::class, 'getByType'])
  ->where(['type' => '[a-z]+'])
  ->name('projects'); //Development || Design
Route::get('/projects/{type}/{id}', [ProjectController::class, 'find'])
  ->where(['type' => '[a-z]+', 'id' => '[0-9]+'])
  ->name('project_details'); //
