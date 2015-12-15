<?php

Route::get('', 'MainController@index');

Route::get('mypage', 'ProfileController@index');

Route::get('about', 'MainController@about');

Route::get('workboard', 'MainController@workboard');

Route::get('postwork', 'MainController@postwork');

Route::get('mypage/edit_profile', 'ProfileController@edit_profile');
Route::post('mypage/edit_profile', 'ProfileController@create');

Route::get('sample/{column?}/{id?}', function($column = null, $id = null){
    $array = ['name' => "logog"];
    var_dump(gettype($array) == "array");
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


