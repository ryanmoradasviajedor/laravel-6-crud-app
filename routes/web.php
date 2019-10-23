<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books','BooksController@index');

Route::get('/book-create','BooksController@create')->name('create_book');

Route::post('/book-store','BooksController@store')->name('store_book');

Route::get('/books/delete/{id}','BooksController@destroy')->name('delete_book');

Route::get('/books/edit/{id}','BooksController@edit')->name('edit_book');

Route::post('/book-update/{id}','BooksController@update')->name('update_book');