<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;


Route::view('/', 'index');
Route::view('/contact', 'contacts');

Route::resource('jobs', JobController::class);


/*
Route::get('/', function () {
    return view('index');
});*/

/*Route::controller(JobController::class)->group(function () {
    Route::get('jobs', 'index');
    Route::get('jobs/{job}', 'show');
    Route::get('jobs/create', 'create');
    Route::post('jobs', 'store');
    Route::get('jobs/{job}/edit', 'edit');
    Route::patch('jobs/{job}', 'update');
    Route::delete('jobs/{job}', 'destroy');
});*/

/*Route::get('/contact', function () {
    return view('contacts');
});*/


/*// Index
Route::get('/jobs', [JobController::class, 'index']);

// form to create job
Route::get('/jobs/create', [JobController::class, 'create']);

// page to show a job
Route::post('/jobs', [JobController::class, 'show']);

// store a job
Route::post('/jobs', [JobController::class, 'store']);

// edit job
Route::post('/jobs', [JobController::class, 'edit']);

// destroy
Route::post('/jobs', [JobController::class, 'destroy']);
*/
// route contacts
