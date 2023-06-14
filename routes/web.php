<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\ProjectApplicationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectPhaseDataController;
use App\Http\Controllers\ProjectPhaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');

Route::get('/projects/apply', [ProjectApplicationController::class, 'create'])->name('student.project.application.create');
Route::post('/projects/apply', [ProjectApplicationController::class, 'store'])->name('student.project.application.store');

Route::get('/feedback/status', [ProjectApplicationController::class, 'index'])->name('student.feedback.status');

Route::get('/complaints/create', [ComplaintController::class, 'create'])->name('student.complaint.submit');
Route::post('/complaints', [ComplaintController::class, 'store'])->name('student.complaints.store');

Route::get('/projects/upload/{project}', [ProjectPhaseController::class, 'create'])->name('student.project.upload');
Route::post('/projects/upload/{project}', [ProjectPhaseDataController::class, 'store'])->name('student.project.upload.store');


