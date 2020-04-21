<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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
    return view('welcome');
});

Route::get('/hello', function() {
  return "Hello";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')

Route::get('/info', function() {
  return Auth::user()->wallet->expends->last()->money_before;
});

Route::get('/register', function() {
  return view('register');
});

// Route::get('/search', function() {
//   return view('search');
// });

Route::get('/users', 'UserController@index')->name('users.index');
Route::post('/users/search', 'UserController@search')->name('users.search');

Route::get('/accessors', function() {
  $user = App\User::find(1);

  return $user->emailname;
});

Route::get('/murators', function() {
  $user = App\User::find(1);
  $user->name = "CCC";
  $user->save();
  return $user->name;
});

Route::get('/dateformat', function() {
  $user = App\User::find(1);
  $user->seen_at = Carbon::now();
  // $user->save();
  return $user->seen_at->getTimestamp();
});


Route::get('/discount/new', function() {
  return view('new');
});

Route::post('/discount/create', 'DiscountController@create')->name('discount-create');

Route::resource('products', 'ProductController');
