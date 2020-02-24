<?php



//frontend
Route::group(['namespace' => 'frontend'], function () {
    Route:: any('/', 'ApplicationController@index')->name('home');
    Route:: any('About', 'ApplicationController@About')->name('About');
    Route:: any('Contact', 'ApplicationController@Contact')->name('Contact');
    Route:: any('Services', 'ApplicationController@Services')->name('Services');
    Route:: any('Career', 'ApplicationController@Career')->name('Career');
});
