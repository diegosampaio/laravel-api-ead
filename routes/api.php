<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CourseController,
    LessonController,
    ModuleController,
    SupportController
};

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);

Route::get('/courses/{id}/modules', [ModuleController::class, 'index']);

Route::get('/modules/{id}/lessons', [LessonController::class, 'index']);
Route::get('/lessons/{id}', [LessonController::class, 'show']);

Route::get('/supports', [SupportController::class, 'index']);
Route::post('/supports', [SupportController::class, 'store']);



Route::get('/', function() {
    return response()->json([
        'success' => true
    ]);
});
