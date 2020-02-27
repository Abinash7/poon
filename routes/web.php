<?php

Route::get('/', function () {
    return view('welcome');

});
Route::group(['middleware' => ['auth','admin']],function(){
  Route::get('/laravel-admin',function(){
    return view('admin.laravel-admin');
  });
});


//frontend
Route::group(['namespace' => 'frontend'], function () {
    Route:: any('/', 'ApplicationController@index')->name('home');
    Route:: any('About', 'ApplicationController@About')->name('About');
    Route:: any('Contact', 'ApplicationController@Contact')->name('Contact');
    Route:: any('Services', 'ApplicationController@Services')->name('Services');
    Route:: any('Career', 'ApplicationController@Career')->name('Career');
});

Route::group(['namespace' => 'backend', 'prefix' =>'laravel-admin'], function () {
    Route::any('/', 'DashboardController@index')->name('admin');
   
    Route::group(['prefix' => 'slider'], function () {
      Route::any('add_slider', 'SliderController@add_slider')->name('add_slider');
      Route::any('edit_slider/{id?}', 'SliderController@edit_slider')->name('edit_slider');
      Route::any('show', 'SliderController@show')->name('show');
      Route::get('delete-show/{id}', 'SliderController@delete_show')->name('delete-show');
      Route::any('Career_view', 'SliderController@Career_view')->name('Career_view');
      Route::get('delete-Career/{id}', 'SliderController@delete_Career')->name('delete-Career');

    
    

    });
    Route::any('admin-logout', 'AdminController@logout')->name('admin-logout');

});

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/home', 'HomeController@index')->name('home');
});

    


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
