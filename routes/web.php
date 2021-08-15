<?php

use App\Http\Controllers\StoriesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    // Route::get('/stories', 'StoriesController@index')->name('stories.index');
    // Route::get('/stories/{story}', 'StoriesController@view')->name('stories.view');
    Route::resource('stories', 'StoriesController');
});

Route::view('who', 'noaccess');

Route::get('admin', function () {
    echo "You're admin now!";
})->middleware('admin');
