<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDataController;

Route::get('/import-students', [StudentDataController::class, 'showImportForm'])->name('import-students');
Route::post('/import-students', [StudentDataController::class, 'importStudents'])->name('import-students');
Route::get('/enroll-students', [StudentDataController::class, 'showEnrollForm'])->name('enroll-students');
Route::post('/enroll-students', [StudentDataController::class, 'enrollStudents'])->name('enroll-students');
Route::get('/view-student-data', [StudentDataController::class, 'viewStudentData'])->name('view-student-data');

Route::get('/', function () {
    return view('welcome');
});
