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
Route::get('/register',function(){
    abort(404);
});
Route::get('/pinaka-kusog-na-admin','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/pinaka-kusog-na-admin','Auth\RegisterController@register')->name('superadminsave');
Route::post('admin/userprofile/changepass',"UserProfileController@changePass")->name('password.update');
Route::get('admin/userprofile/changepass','UserProfileController@showChangepassView')->name('userprofile.changepass');
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
    Route::resource('/admin/userprofile', 'UserProfileController');
    Route::patch('admin/users/{id}/in_active/','AdminUserController@inActive')->name('user.inactive');
    Route::patch('admin/users/{id}/is_active/','AdminUserController@isActive')->name('user.active');
    Route::resource('/admin/accounting', 'AccountingController');
});
