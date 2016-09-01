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

//Route::get('/', function () {
//    return view('index');
//});
//Route::get('/','PostController@index');
//Route::get('/{key}','PostController@post');

Route::get('/', 'PostsController@index');

//Route::get('/auth', function() {
//    //Authentics the user
////    $user = \App\User::find(1);
////    Auth::login($user);
//    
//    //Verifies if the user is authenticated
////    if(Auth::check()){
////        return "Ok";
////    }
////    else{
////        return "Not OK.";
////    }
//   
//    //Using Attempt
//    if(Auth::attempt(['email' =>'aline@gmail.com', 'password' => 123456])){
//        return "Ok";
//    }
//    else{
//        return "Not OK";
//    }
//});
//
Route::get('/auth/logout', function() {
    Auth::logout();    
});

//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController'
//    ]);

Route::group(['prefix' => 'admin'], function() {

    Route::group(['prefix' => 'posts'], function() {

        Route::get('', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);
        Route::get('create', ['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
        Route::post('store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);
        Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostsAdminController@edit']);
        Route::put('update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);
    });
});


Route::auth();

Route::get('/home', 'HomeController@index');
