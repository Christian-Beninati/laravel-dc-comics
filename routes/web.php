<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Home
Route::get('/', [HomeController::class, "index"])->name("home");

// Comics
Route::get('/comics', [ComicController::class, "index"])->name("comics.index");

// Single Comic
Route::get('/comics/{comic}', [ComicController::class, "show"])->name("comics.show");
