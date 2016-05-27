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


Route::group(['middleware' => ['web']], function()
{
	Route::get('/', function () {
    return view('welcome');
	})->name('home');

    Route::post('/signup', [
    
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
    ]);

    Route::post('/signin', [
    
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('/logout', [
    
        'uses' => 'UserController@getLogout',
        'as' => 'logout'
    ]);

    Route::get('/dashboard', [

        'middleware' => 'auth',
    	'uses' => 'PostController@getDashboard',
    	'as' => 'dashboard'
        
    ]);

    Route::post('/createpost',[
        'middleware' => 'auth',
        'uses' => 'PostController@postCreatePost',
        'as' => 'post.create'
    ]);

    Route::get('/deletepost/{post_id}',[
        'middleware' => 'auth',
        'uses' => 'PostController@getDeletePost',
        'as' => 'post.delete'
    ]);

    Route::post('/{id}/edit',[
        'middleware' => 'auth',
        'uses' => 'PostController@getUpdatePost',
        'as' => 'postUpdateRoute'
    ]);

    

});