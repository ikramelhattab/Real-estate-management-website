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
|
*/
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});






/*     Route::name('auth.index')->get('register', 'Auth\RegisterController@index');
 */
 Route::get('registerRole','Auth\RegisterController@index')->name('auth.index');


Route::get('details/{id}', 'DetailsController@test');

// Route::post('demand', 'DetailsController@store');
Route::post('/thread/mark-as-solution','ThreadController@markAsSolution')->name('markAsSolution');
Route::post('comment/like','LikeController@toggleLike')->name('toggleLike');


Route::get('sidebar', 'SidebarController@index');


Route::resource('home', 'HomeController',
                 ['only' => ['index']]);

Route::resource('blogs', 'BlogController',
                 ['only' => ['index']]);


/* Route::get('detail/{id}','DetailController@detail');
 */

Route::get('message','MessageController@test');

Route::get('msg', 'MessageController@index');

Route::resource('msg', 'MessageController',
                 ['expect' => ['create','store']]);
Route::get('/conversations/{user}','MessageController@show')->name('show');
Route::get('/conversations/{user}','MessageController@store');

Route::get('list_dem','TestController@list_demande');

Route::post('valide','TestController@updateProductStatus');





Route::resource('condo_ap', 'CondoController',
                 ['only' => ['index']]);

Route::resource('villa', 'VillaController',
                 ['only' => ['index']]);

Route::resource('house', 'HouseController',
                 ['only' => ['index']]);

Route::resource('cottage', 'CottageController',
                 ['only' => ['index']]);

Route::resource('S0', 'S0Controller',
                 ['only' => ['index']]);

Route::resource('S1', 'S1Controller',
                 ['only' => ['index']]);

Route::resource('S2', 'S2Controller',
                 ['only' => ['index']]);

Route::get('featured', 'FeaturedController@test');

 Route::get('favourite', 'FavoriteController@test');


Route::resource('favourites', 'FavoriteController', ['only' => 'store']);

Route::delete('favourites/{localId}', ['as' => 'favourites.destroy', 'uses' => 'FavoriteController@destroy']);


Route::resource('demand', 'TestController',
                 ['only' => ['index']]);

Route::resource('demand', 'TestController',
                 ['expect' => ['create','store']]);


Route::resource('local', 'LocauxController',
                 ['only' => ['index']]);

Route::resource('local', 'LocauxController',
                 ['expect' => ['create','store']]);

Route::resource('reclamation', 'ReclamationController',
                 ['only' => ['index']]);

Route::resource('reclamation', 'ReclamationController',
                 ['expect' => ['create','store']]);


Route::post('searcch','TestController@search');
Route::get('/search','HomeController@search');


Route::get('app','HomeController@app');


Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);




Route::post('favorite/{post}/add','FavoriteController@add')->name('favorite');
Route::get('/favorite','FavoriteController@index')->name('index');

Route::get('interface','InterfaceController@index');
Route::get('dashboard','DashboardController@index');
Route::get('reclamation_pro','ReclamationController@aff');
Route::get('reclamation_loc','ReclamationController@aff_loc');




Route::resource('facture', 'FactureController',
                 ['only' => ['index']]);

Route::resource('facture', 'FactureController',
                 ['expect' => ['create','store']]);


Route::resource('tranch', 'TranchController',
                 ['only' => ['index']]);

Route::resource('tranch', 'TranchController',
                 ['expect' => ['create','store']]);

 Route::get('fact_loc','FactureController@facture_loc');
Route::get('fact_pro','FactureController@facture_pro');
Route::get('tran_loc','TranchController@tranch_loc');
Route::get('tran_pro','TranchController@tranch_pro');

