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
use Facades\ {
    App\Services\PaymentGateway,
    App\Services\Twitter
};

use App\Events\MessagePosted;

Route::get('/pay/{amount}', function ($amount) {
    PaymentGateway::pay($amount);
});


Route::get('/twit', function () {
   Twitter::publish('Here is my status');
});

Route::get('form', function () {
    return view('form');
});

Route::post('form', function () {
    return request()->all();
});

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

Route::get('timezone', function () {
    $value = config('app.timezone');
    return $value;
});

Route::get('enviroment', function () {
    $environment = App::environment();
   return $environment;
});

/**
 * Notifications
 */

Route::get('/notification', function (App\User $user) {
    $post = App\Post::first();
   $user->notify(new \App\Notifications\PostPublished($post));
});

Route::get('/pusher', function () {
    return view('pusher');
});

Route::get('/messages', function(){
  return App\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages', function(){

  $user = Auth::user();
  $message = $user->messages()->create([
    'message' => request()->get('message')
  ]);

  // Announce that a new message has been posted
  try{
      event(new MessagePosted($message, $user));
  }catch(\Exception $e){
    Log::info($e);
  }

  return ['status' => 'OK'];

})->middleware('auth');


Route::get('/chat', function () {
    return view('chat');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');
