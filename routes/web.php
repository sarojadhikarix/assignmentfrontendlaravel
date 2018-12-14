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


Route::get('/website', 'TestController@Test')->name('website.add');
Route::post('/website', 'TestController@Test')->name('website.add');

Route::get('/category', 'TestController@Category')->name('category.add');
Route::post('/category', 'TestController@Category')->name('category.add');

Route::post('add-website/','TestController@addWebsite');