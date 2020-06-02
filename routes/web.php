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
    return view('welcome',[
        'title' => "Page 1"
    ]);
});

Route::get('/page', function () {
    return view('page',
        [
            'title' => "Page 2 - A little about the Author",
            'author' => json_encode([
                    "name" => "Fisayo Afolayan",
                    "role" => "Software Enginner",
                    "code" => "Always keeping it clean"
            ])
        ]
    );
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/office', 'SettingsController@office')->name('office');

Route::get('/office', function () {
    return view('office',[
        'title' => "Page 1"
    ]);
});

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
    //Route::get('/adminOnlyPage','HomeController@admin');
});

Route::get('/unauthorized', 'HomeController@unauthorized')->name('unauthorized');