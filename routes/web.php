<?php

use App\Services\SchoolService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SwimmerController;
use App\Http\Controllers\SchoolClassController;

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

Route::view('/','welcome');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [SchoolService::class, 'getAll'])->middleware(['auth'])->name('dashboard');
    Route::resource('/school', SchoolController::class)->name('index','school');
    Route::resource('/schoolClass', SchoolClassController::class)->name('index','schoolClass');
    Route::resource('/swimmer', SwimmerController::class)->name('index','swimmer');
    /*

    Route::resource('/orderPosition', OrderPositionController::class)->name('index','orderPosition');
    Route::resource('/product', ProductController::class)->name('index','product');
    Route::resource('/client', ClientController::class)->name('index','client');
    Route::get('/print/{id}', [OrderPositionService::class, 'createPDF']);
    Route::get('/printCMR/{id}', [OrderService::class, 'createCMR']);
    Route::post('store/file', [FileUploadController::class, 'store']);
    Route::post('addNewAddress', [DeliveryController::class, 'addNewAddress'])->name('addNewAddress');
    Route::post('editStatus', [OrderPositionService::class, 'editStatus'])->name('editStatus');
    Route::get ('/download/{id}', [DownloadFileController::class,'index'])->name('file.download.index');
    */

});



/*
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'FirstController@indexStronaGlowna');
	Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
	Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);
	Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('/register', ['as' => 'register', 'uses' => 'AuthController@create']);
	Route::post('/register', ['as' => 'register', 'uses' => 'AuthController@store']);
	Route::get('/acceptAccount/{code}', ['as' => 'acceptAccount', 'uses' => 'AuthController@accept']);
});
Route::group(['middleware' => 'web'], function () {
    Route::get('/home', 'PlayerController@index');
	Route::post('/home/single', 'PlayerController@indexSingle');
	Route::get('/home/single', 'PlayerController@indexSingle');
	Route::get('/players', 'PlayerController@index');
	Route::post('/players', 'PlayerController@store');
	Route::get('/players/create', 'PlayerController@create');
	Route::get('/players/{id}', 'PlayerController@show');
	Route::get('/players/{id}/edit', 'PlayerController@edit');
	Route::patch('/players/{id}/edit', 'PlayerController@update');
	Route::get('/players/{id}/delete', 'PlayerController@destroy');
	Route::get('/startList', 'PlayerController@listaStartowa');
	Route::get('/drukujListe/{id}', 'PlayerController@drukujListe');
	Route::get('/drukujKartyD', 'PlayerController@drukujKartyStartoweD');
	Route::get('/drukujKartyM', 'PlayerController@drukujKartyStartoweM');
	Route::get('/drukujKartySzt', 'PlayerController@drukujKartyStartoweSzt');
	Route::get('/drukujListy', 'PlayerController@drukujListyStartowe');
	Route::get('/drukujSztafety', 'PlayerController@drukujListyStartoweSztafety');
	Route::get('/wydruki', 'HomeController@wydruki');
	Route::get('/sztafety', 'HomeController@sztafety');
	Route::get('/czasy/{styl}', 'HomeController@czasy');
	Route::post('/zalozSztafete', 'PlayerController@zalozSztafete');
	Route::get('/pobierzZawodnikow/{szkolaId}', 'PlayerController@pobierzZawodnikow');
	Route::post('/zapiszCzas', 'PlayerController@zapiszCzas');
	Route::get('/usunSztafete/{id}', 'HomeController@usunSztafete');
	Route::get('/sztafetyTiming', 'HomeController@sztafetyTiming');
	Route::post('/zapiszCzasSztafety', 'PlayerController@zapiszCzasSztafety');
	Route::get('/drukujFinalSztafety', 'PlayerController@drukujListeStartowaSztafetaFinal');
	Route::get('/drukujFinal/{id}', 'PlayerController@drukujListeStartowaFinal');
	Route::get('/drukujKartyFinal/{id}', 'PlayerController@drukujKartyFinal');
	Route::get('/statystyki', 'HomeController@statystyki');
	Route::post('/zapiszCzasFinal', 'PlayerController@zapiszCzasFinal');
	Route::get('/drukujWyniki', 'PlayerController@drukujWyniki');
	Route::get('/zakonczKonkurencje/{id}', 'PlayerController@zakonczKonkurencje');
    Route::get('/step/{step}', 'PlayerController@step');
	Route::get('/zapiszZgode/{playerID}', 'PlayerController@zapiszZgode');
	Route::get('/drukujDyplomy/{id}', 'PlayerController@drukujDyplomy');


});

*/

require __DIR__.'/auth.php';
