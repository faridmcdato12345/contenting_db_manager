<?php

use Illuminate\Support\Facades\DB;
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
    return redirect('/home');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'admin'], function (){
    Route::resource('/admin/users', 'AdminUserController');
    Route::resource('/admin/cpanels', 'AdminCpanelController');
    Route::resource('/admin/domains', 'AdminDomainController');
    Route::resource('/admin/mailchimp', 'AdminMailChimpController');
    Route::resource('/admin/plugins', 'AdminPluginController');
    Route::resource('/admin/role', 'AdminRoleController');
    Route::resource('/admin/urls', 'AdminUrlController');
    Route::resource('/admin/youtubes', 'AdminYoutubeController');
    Route::resource('/admin/clients', 'AdminClientController');
});
