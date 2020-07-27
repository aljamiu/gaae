<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| php -S localhost:8000 -t public/
*/


Route::get('/', 'generalController@index');
//

//
Route::get('/about', 'generalController@about');
//
Route::get('/contact', function () {
  return view('contact');
});
//
Route::get('/login', function () {
  return view('login');
});

Route::post('register', 'registerscontroller@save');
Route::get('/register', function () {
  return view('register');
});

Route::get('/404', function () {
  return view('404');
});

Auth::routes();

Route::get('/home', 'generalController@home')->name('home');

Route::post('edit', 'editcontroller@save')
->middleware('auth');

Route::post('news', 'newsletterscontroller@save')
->middleware('auth');

Route::post('comment', 'commentscontroller@save');

Route::get('/homepage-two', 'generalController@home')
->middleware('auth');

Route::get('/news', 'generalController@news')
->middleware('auth');

//
Route::get('/past-events', 'generalController@pastevents')
->middleware('auth');
//

Route::get('/upcoming-events', 'generalController@upcomingevents')
->middleware('auth');
//

Route::get('/pricing', function () {
  return view('pricing');
})->middleware('auth');

Route::get('/student', 'generalController@subscriptions1')
->middleware('auth');

Route::get('/standard', 'generalController@subscriptions2')
->middleware('auth');
