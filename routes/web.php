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
    return view('index');
})->name('index');
Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');


Route::group(['prefix'=>'developers'],function(){
    Route::get('register','DevelopersController@register')->name('registerDeveloper');
    Route::post('register','DevelopersController@doregister')->name('doregisterDeveloper');
    Route::get('login','DevelopersController@login')->name('loginDeveloper');
    Route::post('login','DevelopersController@dologin');

    Route::get('dashboard','DevelopersController@dashboard')->name('developerDashboard')->middleware('auth');
    Route::get('logout','DevelopersController@logout')->name('logoutDeveloper')->middleware('auth');
    Route::get('profile','DevelopersController@profile')->name('profileDeveloper')->middleware('auth');
    Route::post('profile','DevelopersController@profileUpdate')->middleware('auth');

    Route::get('topics/{category}','DevelopersController@topic')->name('topic')->middleware('auth');
    Route::get('challange/{id}','DevelopersController@challange')->name('challange')->middleware('auth');
    Route::post('challange/{id}','DevelopersController@dochallange')->middleware('auth');
    Route::get('action','DevelopersController@action')->name('action')->middleware('auth');

});
Route::group(['prefix' => 'companies'],function(){
    Route::get('register','CompaniesController@register')->name('registerCompany');
    Route::post('register','CompaniesController@doregister')->name('doregisterCompany');
    Route::get('login','CompaniesController@login')->name('loginCompany');
    Route::post('login','CompaniesController@dologin')->name('dologinCompany');
    Route::get('dashboard','CompaniesController@dashboard')->name('companyDashboard')->middleware('auth');
    Route::get('logout','CompaniesController@logout')->name('logoutCompany')->middleware('auth');
    Route::get('profile','CompaniesController@profile')->name('profileCompany')->middleware('auth');
    Route::post('profile','CompaniesController@profileUpdate')->middleware('auth');
});


// Route::group(['prefix'=>'user' , 'middleware' => 'admin' ],function(){
//     Route::get('index', 'UsersController@index')->name('user.index');
//     Route::get('delete/{user_id}', 'UsersController@delete')->name('user.delete');
//     Route::get('create','UsersController@create')->name('user.create');
//     Route::post('create','UsersController@store')->name('user.store');
//     Route::get('edit/{user_id}','UsersController@edit')->name('user.edit');
//     Route::post('edit/{user_id}','UsersController@update')->name('user.update');

//     Route::get('logout','UsersController@logout')->name('user.logout');
// });
// Route::get('login','UsersController@login')->name('user.login');
// Route::post('login','UsersController@dologin')->name('user.dologin');
// Route::get('register','UsersController@register')->name('user.register');
// Route::post('register','UsersController@doregister')->name('user.doregister');



