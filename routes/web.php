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

// Route::view('/grocery', 'grocery');
Route::get('/grocery', function() {
    return view('grocery');
});
Route::post('/grocery/post', 'GroceryController@store');

Route::get('/skills', function() {
    // dd('hello');
    return ['Laravel', 'Vue', 'PHP'];
});

Route::get('/available_rooms', 'AjaxController@get_available_rooms');

Route::get('/room_categories', 'AjaxController@get_categories');

Route::get('/make_reservation', function() {
    return view('make_reservation');
});

Route::get('/load_categories', function() {
    return ['Economy', 'Deluxe', 'Suite'];
});

Route::get('/load_rooms', function() {
    return [102, 103, 104, 105, 106, 107, 108, 109, 110];
});

// Route::get('/available_rooms', function() {
//     // dd('hello');
//     return [102, 103, 104, 105, 106, 107, 108, 109, 110];
// });

// Route::get('/room_categories', function() {
//     // dd('hello');
//     return ['Economy', 'Deluxe', 'Suite'];
// });
