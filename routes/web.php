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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Frontend\HomeController@index');
Route::post('send_message','Frontend\HomeController@get_message')->name('send_message');


//Route Admin/Backend
Route::group(['middleware' => ['auth']], function () {
  
   Route::get('icw_admin','Backend\HomeController@index');

   Route::prefix('icw_admin')->group(function () {

      Route::get('setting', 'Backend\SettingsController@index')->name('setting');
      Route::get('messages','Backend\MessageController@index');
      
  });

  Route::post('get_message','Backend\MessageController@ajax_datatable_')->name('get_message');

  
});