<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',function(){
  $this->data['active']="dashboard";
  $this->data['currentPage']="Dashboard";
  return view('dashboard.index',$this->data);
});

Route::get('/academics',function(){
  $this->data['active']="academics";
  $this->data['currentPage']="Academics";
  return view('academics.index',$this->data);
});
