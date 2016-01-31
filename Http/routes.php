<?php

Route::group(['middleware' => ['web']], function () {

    Route::group(['namespace' => 'NineCells\Auth\Http\Controllers'], function() {

        Route::get('auth/github', 'AuthController@redirectToProvider');
        Route::get('auth/github/callback', 'AuthController@handleProviderCallback');
        Route::get('auth/login', 'AuthController@login');
        Route::post('auth/logout', 'AuthController@logout');
    });
});