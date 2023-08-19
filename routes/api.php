<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/enroll-students', 'StudentDataController@enrollStudents');
Route::get('/students-with-cohorts', 'StudentDataController@getStudentsWithCohorts');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
