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
Route::resource('usercollections','UserCollectionController');
Route::resource('most_wanted_dashboard','Most_Wanted_Dashboard_Controller');


Route::get('usercomic/{usercomic}/postInquiry', 'UserComicController@postInquiry');
Route::get('usercomic/{usercomic}/removeInquiry', 'UserComicController@removeInquiry');
Route::resource('usercomic','UserComicController');
Route::resource('comics','ComicController');
Route::resource('reviewcomic','ReviewComicController');






Auth::routes();
Route::get('/account', 'AccountController@index');
Route::get('/home', 'HomeController@index')->name('home');
