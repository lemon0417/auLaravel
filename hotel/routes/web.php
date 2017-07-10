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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('index', [
        'name' => 'chrislin'
        ]);
});

Route::get('user/{id}', function($id){
    return 'Hello, '.$id;
}) -> where('id', '[A-Za-z]+');