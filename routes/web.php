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


//Route::get('/admin', ['uses' => 'Admin\HomeController@index', 'as' => 'admin.index', 'middleware' => ['auth', 'can:admin-panel']]);

Route::group(
    ['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel']],
    function (){
        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'index']);
    }
);
