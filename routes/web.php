<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function() {
    $name = request('name'); //Get 'name' from req.query parameters/query string

    return view('test', [ //any variables passed here are available in the test html file
        'name' => $name //can inline like 'name' => request('name')
    ]);
});

Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');
