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

$segment = Request::segment('1');


Route::get('/{lang?}', function () {
    return view('welcome');
})->where('lang', implode('|', array_flip(config('app.languages'))));

Auth::routes();

Route::group(['prefix' => $segment], function () {
    Route::get('/', 'WelcomeController@index')->name('home');
    Route::get('/sign', 'WelcomeController@connexion')->name('sign');
    Route::get('/contact', 'WelcomeController@contact')->name('contact');
    Route::get('/infographics', 'WelcomeController@infographics')->name('infographics');
    Route::get('/Serigraphy', 'WelcomeController@Serigraphy')->name('Serigraphy');
    Route::get('/flyers', 'WelcomeController@flyers')->name('flyers');
});

