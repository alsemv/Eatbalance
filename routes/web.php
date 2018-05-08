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
    function (){

        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'index']);

        Route::group(['prefix' => 'users', 'as' => 'users.'], function (){
            Route::get('/', ['uses' => 'UsersController@index', 'as' => 'index']);
            Route::get('/create', ['uses' => 'UsersController@create', 'as' => 'create']);
        });

        Route::group(['prefix' => 'menus', 'as' => 'menus.'], function (){
            Route::get('/', ['uses' => 'MenusController@index', 'as' => 'index']);
            Route::get('/create', ['uses' => 'MenusController@create', 'as' => 'create']);
        });
    }
);
