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

// Route::get('/', function(){
// 	return view('welcome');
// });

// Route::get('/', function(){
// 	return 'Selamat Datang di Praktikum PABWE';
// });

// Route::get('test', function(){
// 	return 'Selamat Datang di Praktikum PABWE dengan alamat sub-domain test';
// });

// Route::get('test/{jenis}', function($jenis){
// 	return 'Selamat Datang di ujian'.$jenis.'PABWE';
// });






Route::get('kuliah', 'KuliahController@index');


Route::get('kuliah/materi', 'KuliahController@viewMateri');

Route::get('/', 'WebsiteController@index');

Route::get('index/administrasi', 'WebsiteController@administrasi');