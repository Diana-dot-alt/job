<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/jobs', [JobsController::class,'index'])->name('jobs.show');
Route::get('/jobs/{id}', [JobsController::class,'show'])->name('jobs.show');







// Route::get('/jobs', function () use ($jobs) {
//     return view('jobs', ['jobs' => $jobs]);
// })->name('jobs');

// // Job Detail Page
// Route::get('/jobs/{id}', function ($id) use ($jobs) {
//     abort_if(!isset($jobs[$id]), 404);
// return view('show', ['job' => $jobs[$id]]);
// });