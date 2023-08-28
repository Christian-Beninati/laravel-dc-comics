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



// Comic Routes
// Index
Route::get('/comics', [ComicController::class, "index"])->name("comics.index");  // show comics list

// Create 
Route::get('/comics/create', [ComicController::class, "create"])->name("comics.create");  // show creation form

// Show
Route::get('/comics/{comic}', [ComicController::class, "show"])->name("comics.show");  //show comic details

// Edit
Route::get('/comics/{comic}/edit', [ComicController::class, "edit"])->name("comics.edit");  // show edit form

// Store 
Route::post('/comics', [ComicController::class, "store"])->name("comics.store");  // create the post on the db

// Update
Route::put('/comics/{comic}', [ComicController::class, "update"])->name("comics.update");  // update and send to db
