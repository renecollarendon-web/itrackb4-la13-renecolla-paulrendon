<?php
use App\Http\Controllers\MovieController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\TeacherController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/movies/featured', [MovieController::class, 'featured'])
 ->name('movies.featured')->middleware('check.genre');

Route::get('/movies/filter/{genre?}', function($genre = null) {
 return redirect()->route('movies.index', ['genre' => $genre]);})
->name('movies.filter.old')->middleware('check.genre');

Route::resource('movies', MovieController::class)
->middlewareFor('index','check.genre') ;




//Route::resource('teachers', TeacherController::class)->only(['index', 'show']);
//Route::get('/teachers/featured', [TeacherController::class, 'featured'])->name('teachers.featured');

