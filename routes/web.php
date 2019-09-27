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
    return view('baas.layout.index');
})->name('trang-chu');

Route::get('hop-tac',function(){
	return view('baas.page.cooperate');
})->name('hop-tac');

Route::get('video',function(){
	return view('baas.page.video');
})->name('video');

Route::get('backup',function(){
	return view('baas.page.baas_sv');
})->name('baas');

Route::get('disaster-recovery',function(){
	return view('baas.page.drass_sv');
})->name('drass');

Route::get('files',function(){
	return view('baas.page.sync_sv');
})->name('sync');

Route::get('migration',function(){
	return view('baas.page.migration');
})->name('migration');

Route::get('notary',function(){
	return view('baas.page.notary');
})->name('notary');

Route::get('tin-tuc',function(){
	return view('baas.page.news');
})->name('tin-tuc');

Route::get('documents',function(){
	return view('baas.page.document');
})->name('documents');

Route::get('lien-he',function(){
	return view('baas.page.lien-he');
})->name('lien-he');

Route::get('cyber-protection',function(){
	return view('baas.page.cyber');
})->name('cyber');

// Route::prefix('/')->group(function () {
// 	Route::get('{name_page}', 'GetUrlController@index')->name('trang-chu');
// 	Route::get('{name_page}', 'GetUrlController@hop_tac')->name('hop-tac');
// 	Route::get('{name_page}', 'GetUrlController@video')->name('video');
// 	Route::get('{name_page}', 'GetUrlController@backup')->name('baas');
// });

