<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('home');
Route::resource('owner', 'OwnerController');
Route::resource('patient', 'PatientController');
Route::get('patient/create/{owner}', 'PatientController@createWithOwner')->name('patient.create.withOwner');
