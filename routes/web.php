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

Auth::routes();

Route::group(['middleware' => 'web'], function() {

	Route::get('/', 				'DashboardController@index');
	Route::get('/list-of-servers', 	'ServerListController@index');

	Route::get('/settings', 		'SettingsController@index')->name('settings');
	Route::post('/settings', 		'SettingsController@saveChanges');
});

