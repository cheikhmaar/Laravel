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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('accueil', function () {
    return view('accueil');
})->name('accueil');

//Classes
Route::get('classeList', 'App\Http\Controllers\ClasseController@index')->name('classeList');
Route::get('classeAdd','App\Http\Controllers\ClasseController@create')->name('classeAdd');
Route::post('classes/store', 'App\Http\Controllers\ClasseController@store')->name('classeStore');
Route::get('/classeList/{classe}/classeEdit','App\Http\Controllers\ClasseController@edit')->name('classeEdit');
Route::patch('/classeList/{classe}', 'App\Http\Controllers\ClasseController@update')->name('classeList.classeUpdate');
Route::delete('/classeList/{classe}', 'App\Http\Controllers\ClasseController@destroy')->name('classeList.classedestroy');



//Eleves
Route::get('eleveList', 'App\Http\Controllers\EleveController@index')->name('eleveList');
Route::get('eleveAdd','App\Http\Controllers\EleveController@create')->name('eleveAdd');
Route::post('eleves/store', 'App\Http\Controllers\EleveController@store')->name('eleveStore');
Route::get('/eleveList/{eleve}/eleveEdit','App\Http\Controllers\EleveController@edit')->name('eleveEdit');
Route::patch('/eleveList/{eleve}', 'App\Http\Controllers\EleveController@update')->name('eleveList.eleveupdate');
Route::delete('/eleveList/{eleve}', 'App\Http\Controllers\EleveController@destroy')->name('eleveList.elevedestroy');



require __DIR__.'/auth.php';
