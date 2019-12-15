<?php
use  App\Http\Middleware;
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

Route::get('/','homeController@getindex')->name('getindex');
Route::get('get_data/{id}','homecontroller@get_data')->name('get_data');
Route::get('get_mail','homecontroller@get_mail')->name('get_mail');
Route::post('sent_mail','homecontroller@sent_mail')->name('sent_mail');
Route::post('getlogin','adminController@getlogin')->name('getlogin')->middleware('checklogin');
Route::get('logout','adminController@logout')->name('logout');
Route::get('reg','adminController@reg')->name('reg');
Route::post('regsave','adminController@regsave')->name('regsave');
Route::get('login','adminController@login')->name('login')->middleware('checklogin');

Route::group(['middleware' => ['auth']], function () {	
	Route::group(['prefix' => 'admin', 'middleware' => 'checkadmin'], function(){
        Route::get('getadmin','adminController@getadmin')->name('getadmin');
        Route::get('/','adminController@list_category')->name('list_category');
        Route::get('list_category','adminController@list_category')->name('list_category');
        Route::get('add_category','adminController@add_category')->name('add_category');
        Route::post('add_save_category','adminController@add_save_category')->name('add_save_category');
        Route::get('cagetory_delete/{id}','adminController@cagetory_delete')->name('cagetory_delete');
        Route::get('cagetory_update/{id}','adminController@cagetory_update')->name('cagetory_update');
        Route::post('update_save_category/{id}','adminController@update_save_category')->name('update_save_category');
        Route::get('list_don_hang','adminController@list_don_hang')->name('list_don_hang');
        Route::get('add_don_hang','adminController@add_don_hang')->name('add_don_hang');
        Route::post('add_save_don_hang','adminController@add_save_don_hang')->name('add_save_don_hang');
	});

});

