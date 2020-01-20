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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login', 'AuthController@index');

Route::post('/login/custom', [
    'uses'=> 'AuthController@login',

    'as'=>'login.custom'
]);


Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboardAdmin', function(){
        return view('dashboardAdmin');
    })->name('dashboardAdmin');;
    Route::get('/dashboardUser', function(){
        return view('dashboardUser');
    })->name('dashboardUser');;
});

Route::get('login', 'AuthController@index');
/*
Route::get('login', 'AuthController@index');
  Route::post('post-login', 'AuthController@postLogin');
  Route::get('registration', 'AuthController@registration');
  Route::post('post-registration', 'AuthController@postRegistration');
  Route::get('dashboardAdmin', 'AuthController@dashboardAdmin');
  Route::get('dashboardUser', 'AuthController@dashboardUser');
  Route::get('logout', 'AuthController@logout');
*/
Route::get('registration', 'AuthController@registration');
  Route::post('post-registration', 'AuthController@postRegistration');

/*Route::view('form','dashboardUser');*/
Route::post('/insert','AuthController@insert');

Route::get('logout', 'AuthController@logout');