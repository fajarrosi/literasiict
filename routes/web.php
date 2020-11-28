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
    return view('landing');
});
Route::get('/registers', function () {
    return view('register');
});

Route::get('edit-data', 'TestController@editData');
Route::get('update-data', 'TestController@updateData');

Auth::routes();

Route::get('/logins', function () {
    return view('login');
});
//Dashboard
Route::get('/dashboard','DashboardController@index')->name('dashboard');

//kuesioner
Route::get('kuesioner/create','KuesionerController@create')->name('kuesioner.create');
Route::post('kuesioner','KuesionerController@store')->name('kuesioner.store');
Route::get('kuesioner/{kategori}','KuesionerController@show')->name('kuesioner.show');

//pertanyaan
Route::get('kuesioner/{kategori}/pertanyaan/create','PertanyaanController@create')->name('pertanyaan.create');
Route::post('kuesioner/{kategori}/pertanyaan','PertanyaanController@store')->name('pertanyaan.store');
Route::delete('/kuesioner/{kategori}/pertanyaan/{pertanyaan}', 'PertanyaanController@delete');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');
Route::post('/pertanyaan/update','PertanyaanController@update');

//Survey
Route::get('/survey','SurveyController@show');
Route::post('/survey','SurveyController@store')->name('survey.store');
Route::get('/survey/sukses/{id}','SurveyController@sukses')->name('survey.show');

// Hasil Literasi 
Route::get('/result','ResultlitController@index');
Route::get('/litict','ResultlitController@litict')->name('litict');
Route::get('/litktg/{id}','ResultlitController@litktg')->name('litktg');
Route::get('/litlok/{id}','ResultlitController@litlok');
Route::get('/litpend/{id}','ResultlitController@litpend');
Route::get('/litjns/{id}','ResultlitController@litjns');
Route::get('/litltr/{id}','ResultlitController@litltr');
Route::get('/litum/{id}','ResultlitController@litum');
Route::get('/litkel/{id}','ResultlitController@litkel');

Route::get('/home', 'HomeController@index')->name('home');
