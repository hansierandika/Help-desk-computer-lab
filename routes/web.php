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

Route::get('/URecord', function () {
    return view('URecord');
});
Route::get('/UView', function () {
    $data=App\Isue::all();
    return view('UView')->with('data',$data);
});
Route::get('/USolved', function () {
    $data= App\Isue::where('status','0')->get();
        return view('USolved',['data'=>$data]);
});

Route::get('/notification', function () {
    $data= App\User::where('approved','0')->get();
    /*$data1= App\User::where('approved','1')->where('role',0)->get();*/
    $data3= App\Isue::where('status',0)->get();

    return view('admin/notifications',['data'=>$data],['data3'=>$data3]);
});

Route::get('approve/{id}','formController@approve')->name('approve');
/*Route::get('EditProfile/{id}','AdminDashController@EditProfile')->name('EditProfile');*/
Route::post('EditProfile/{id}','formController@EditProfile');
Route::put('EditProfile','AdminDashController@EditProfile');

Route::get('/users', function () {
    $data= App\User::where('role',1)->where('admin',0)->get();
   /* return dd($data);*/
   return view('admin/user',['data'=>$data]);
});

Route::get('update/{user_id}','AdminDashController@update');
Route::get('/tables', function () {
    $data= App\User::where('role',0)->get();
    return view('admin/tables',['data'=>$data]);
});

Route::get('/dashboardAdmin', function () {
    $isu=DB::table('isue')->get();
    return view('dashboardAdmin',['isu'=>$isu]);
});

Auth::routes();
Route::get('/login', 'AuthController@index');
Route::post('/login/custom', [
    'uses'=> 'AuthController@login',

    'as'=>'login.custom'
]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboardAdmin', function(){
        $data= App\Isue::where('status',0)->where('hardwareSoftware','Hardware')->get();
        $data2= App\Isue::where('status',0)->where('hardwareSoftware','Software')->get();
        return view('admin/dashboard',['data'=>$data],['data2'=>$data2]);
    })->name('dashboardAdmin');;

    Route::get('/dashboardUser', function(){
        return view('URecord');
    })->name('dashboardUser');;

    Route::get('/dashboardSystem', function(){
        $data= App\Isue::where('status',0)->where('hardwareSoftware','Hardware')->get();
        $data2= App\Isue::where('status',0)->where('hardwareSoftware','Software')->get();
    return view('dashboardSystem',['data'=>$data],['data2'=>$data2]);
    })->name('dashboardSystem');;
});


Route::get('CorrectEH/{id}','formController@CorrectEH')->name('CorrectEH');
Route::get('CorrectES/{id}','formController@CorrectES')->name('CorrectES');

Route::get('CorrectAdminH/{id}','formController@CorrectAdminH')->name('CorrectAdminH');
Route::get('CorrectAdminS/{id}','formController@CorrectAdminS')->name('CorrectAdminS');

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
/*Route::get('/store','AuthController@store');*/
/*Route::get('/store', function () {
    $dataS=App\Isue::all();
    return view('/UView')->with('issues',$dataS);

});*/

Route::get('/UView','formController@list');
Route::get('/USolved','formController@listS');
/*
Route::get('/dashboardAdmin','AuthController@view');*/

Route::get('logout', 'AuthController@logout');
