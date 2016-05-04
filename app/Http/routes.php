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

Route::get('/login',
    [
        'uses' => 'Auth\AuthController@getLogin',
        'as' => 'login'
    ]
);

Route::post('/login',
    [
        'uses' => 'Auth\AuthController@postLogin',
        'as' => 'login'
    ]
);

Route::get('/logout',
    [
        'uses' => 'Auth\AuthController@getLogout',
        'as' => 'logout'
    ]
);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return redirect('principal');
    });

    Route::get('/principal',
        [
            'uses' => 'DashboardController@principal',
            'as' => 'principal'
        ]
    );

    /* AUTOBUSES */
        Route::resource('autobuses', 'AutoController');

        Route::get('autobuses/{id}/delete','AutoController@delete');

    /* OFICINAS */
        Route::resource('oficinas', 'OficinaController');

        Route::get('oficinas/{id}/delete','OficinaController@delete');


    Route::group(['middleware' => 'admin'], function () {
        /* PERFILES */
            Route::resource('perfiles', 'PerfilController');

            Route::get('perfiles/{id}/delete','PerfilController@delete');

        /* USERS */
            Route::resource('users', 'UserController');

            Route::get('users/{id}/delete','UserController@delete');
    });
});
