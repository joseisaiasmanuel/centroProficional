<?php


Route::get('/', function () {
    return view('welcome');
    });

    Route::group(['namespace' => 'sistema'], function(){

    Route::resource('sistema/turma','TurmaController');
    Route::resource('sistema/periodo','PeriodoController');
    });
 
    

