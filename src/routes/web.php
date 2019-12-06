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

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'MieProject\Settings\Controllers','as'=>'admin.','middleware'=>'web'], function() {
    // Settings Route
    Route::get('admin/settings', 'SettingController@index')->name('settings');
    Route::post('admin/settings', 'SettingController@store')->name('settings.store');
});
