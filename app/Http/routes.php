<?php

Route::get('', 'MainController@index');

Route::get('home', 'ProfileController@index');

Route::get('about', 'MainController@about');

Route::get('workboard', 'MainController@workboard');

Route::get('postwork', 'MainController@postwork');

Route::get('edit_profile', 'ProfileController@edit_profile');
Route::post('edit_profile', 'ProfileController@create');

Route::get('sample/{column?}/{id?}', function($column = null, $id = null){
    if($column === null && $id === null){
        $users = DB::table('users')->get();
    }else{
        $users = DB::table('users')->where($column, '=', $id)->get();
    }
    return view('sample', ["title" => "テンプレートサンプル", "users" => $users]);
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


