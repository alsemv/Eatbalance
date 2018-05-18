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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home.index']);

Route::group(
    ['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel']],
    function () {

        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'index']);

        Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
            Route::get('/', ['uses' => 'UserController@index', 'as' => 'index']);
            Route::get('/create', ['uses' => 'UserController@create', 'as' => 'create']);
        });

        Route::group(['prefix' => 'menu', 'as' => 'menu.'], function () {
            Route::get('/', ['uses' => 'MenuController@index', 'as' => 'index']);
            Route::get('/create', ['uses' => 'MenuController@create', 'as' => 'create']);
        });

        Route::group(['prefix' => 'meal', 'as' => 'meal.'], function () {
            Route::get('/', ['uses' => 'MealController@index', 'as' => 'index']);
            Route::get('/create', ['uses' => 'MealController@create', 'as' => 'create']);
            Route::post('/store', ['uses' => 'MealController@store', 'as' => 'store']);
            Route::get('/edit/{id}', ['uses' => 'MealController@edit', 'as' => 'edit']);
            Route::post('/update/{id}', ['uses' => 'MealController@update', 'as' => 'update']);
            Route::get('/delete/{id}', ['uses' => 'MealController@delete', 'as' => 'delete']);
        });
    }
);

Route::group(
    ['prefix' => 'menu', 'as' => 'menu.', 'Menu', 'middleware' => ['web']],
    function () {
        Route::get('/start-menu-json', ['uses' => 'MenuController@start_menu_json', 'as' => 'start.json']);
        Route::get('/meals-list-json/{menu_id}/{day_id}', ['uses' => 'MenuController@meals_list_json', 'as' => 'meals.json']);
        Route::get('/select-menu-json/{id}', ['uses' => 'MenuController@select_menu_json', 'as' => 'select.json']);
    }
);
