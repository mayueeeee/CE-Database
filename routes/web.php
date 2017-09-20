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
//Form routes
Route::get('/', 'GirlController@postHome');
//Route::get('/', 'GirlController@getHome');
//Route::post('/', 'GirlController@postHome');
Route::post('check', 'GirlController@savedata');
Route::get('/round', 'GirlController@getroundname');


Route::post('viewpost', 'AdminController@viewpost');

//Admin routes
Route::get('dashboard','AdminController@dashboard');
Route::get('setting','AdminController@sys_setting');
Route::post('setting','AdminController@save_setting');
Route::get('girls','AdminController@getAllGirls');
Route::get('view/girl','AdminController@getGirlsOnly');
Route::get('girls/{id}', 'AdminController@getGirl');
Route::get('view/round/{id?}','AdminController@viewall');

Route::get('api/v1/girls', function () {
    return App\Girl::all();
});

Route::get('login', function () {
    return view('admin.dashboard');
});



Route::get('lab','bui@getTest');
Route::get('hello', 'HelloController@index');
