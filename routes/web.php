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
Route::post('send_message','Frontend\HomeController@send_message')->name('send_message');


//Route Admin/Backend
Route::group(['middleware' => ['auth']], function () {
  
   Route::get('icw_admin','Backend\HomeController@index');

   Route::prefix('icw_admin')->group(function () {


      Route::prefix('setting')->name('setting.')->group(function(){

         Route::get('/', 'Backend\SettingsController@index')->name('index');
         Route::post('store', 'Backend\SettingsController@store')->name('store');
      });     

      Route::get('messages','Backend\MessageController@index')->name('messages');

      //Page group companies
      Route::prefix('group_companies')->name('group_companies.')->group(function(){

         
         $_company = 'Backend\GroupCompanyController@';

         Route::get('form', $_company.'form')->name('form');
         Route::Post('store/{id?}', $_company.'store')->name('store');
         Route::get('/',$_company.'index')->name('index');
         Route::delete('destroy', $_company.'destroy')->name('destroy');

      });
      
  });

  Route::post('get_message','Backend\MessageController@ajax_datatable_')->name('get_message');

  
});


