<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['middleware'=>['web']],function() {


    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/signInPage', [
        'uses' => 'UserController@getSignIn',
        'as' => 'signInPage'
    ]);



    Route::post('/signin', [
        'uses' => 'UserController@postSignIn',
        'as' => 'postSignIn'

    ]);

    Route::post('/signup', [
        'uses' => 'UserController@postSignUp',
        'as' => 'postSignUp'

    ]);

    Route::get('/dashboard', [
        'uses' => 'PostController@getDashboard',
        'as' => 'dash'
    ]);


});