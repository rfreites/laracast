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

//Event::listen('eloquent.created: App\Post', function () {
//    var_dump('Un Post ha sido creado')
//});

Route::get('/', function () {
  $links = array(
    'https://ronny.com' => 'ronny.com',
    'https://freites.com' => 'freites.com',
    'https://angelo.com' => 'angelo.com',
    'https://vega.com' => 'vega.com'
  );
    return view('welcome')->with('links',$links);
});

// model biding using id from the model and the model complete
Route::get('users/{user}', function (App\User $user) {
    return $user;
});

Route::get('users-binding/{user}', 'UserController@getUser');

Route::get('/message', function(){
   return view('blade-tutorial.message');
});

Route::resource('post','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index');
