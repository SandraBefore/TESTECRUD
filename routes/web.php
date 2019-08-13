<?php

Route::get('/', function () {
    return view( 'app');
});

Route::get('/{any?}', function (){
    return view('app');
})->where('any', '^(?!api\/)[\/\w\.-]*');

// Route::get('/home', 'HomeController@index')->name('home');
