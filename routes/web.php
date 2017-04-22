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

Route::get('/', function () {
  $links = array(
    'https://ronny.com' => 'ronny.com',
    'https://freites.com' => 'freites.com',
    'https://angelo.com' => 'angelo.com',
    'https://vega.com' => 'vega.com'
  );
    return view('welcome')->with('links',$links);
});

Route::get('/message', function(){
   return view('blade-tutorial.message');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
