<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('foo', 'FooController@index');

Route::get('/', function () {
    return view('static.welcome');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});

Route::resource('article', 'ArticleController');
// flash() does not work inside web middleware group.

Route::get('/{tag}/articles', 'TagController@show_tag_articles');
