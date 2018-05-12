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
    return view('welcome');
});

/*Route::get('/comics', 'ComicController@show');*/
Route::resource('listcollections','ListCollectionsAlphabeticController');

Route::resource('collections','CollectionController');
Route::resource('usercomic','UserComicController');
Route::resource('comics','ComicController');





Auth::routes();
Route::get('/account', 'AccountController@index');
Route::get('/home', 'HomeController@index')->name('home');
