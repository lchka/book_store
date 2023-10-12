<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/books',BookController::class);

// //Create a new book

// Route::get('/books/create','BookController@create');
// Route::post('/books','BookController@store');

// //List all books

// Route::get('/books','BookController@index');

// //Show a specific book

// Route::Get('/books/{book}', 'BookController@show');

// //Edit a specific book

// Route::get('/books/{book}/edit', 'BookController@edit');
// Route::put('/books/{book}', 'BookController@update');
// Route::patch('/books/{book}', 'BookController@update');

// //Delete a specific book
// Route::delete('/books/{book}', 'BookController@destroy');