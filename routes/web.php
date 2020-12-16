<?php

use App\Http\Controllers;
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
    return view('site/home');
})->name('site.home');


Route::get('/painel','LoginController@index' )->name('painel.home');
Route::post('/painel/login','LoginController@login' )->name('painel.login');
Route::get('/painel/logout','LoginController@logout' )->name('painel.logout');


Route::middleware('auth')->group(function () {

    Route::get('/admin','Admin\HomeController@index')->name('admin.home');

    Route::get('/admin/users','Admin\UserController@index')->name('admin.users');
    Route::get('/admin/users/add','Admin\UserController@Create')->name('admin.users.create');
    Route::get('/admin/users/validate','Admin\UserController@validateUser')->name('admin.users.validate');
    Route::post('/admin/users/save','Admin\UserController@store')->name('admin.users.save');
    Route::get('/admin/users/edit/{id}','Admin\UserController@edit')->name('admin.users.edit');
    Route::put('/admin/users/update/{id}','Admin\UserController@update')->name('admin.users.update');
    Route::get('/admin/users/delete/{id}','Admin\UserController@destroy')->name('admin.delete');


    Route::get('admin/partner', 'Admin\PartnerController@index')->name('admin.partner');
    Route::get('admin/partner/add', 'Admin\PartnerController@create')->name('admin.partner.add');
    Route::post('admin/partner/save', 'Admin\PartnerController@save')->name('admin.partner.save');
    Route::get('admin/partner/edit/{id}', 'Admin\PartnerController@edit')->name('admin.partner.edit');
    Route::put('admin/partner/update/{id}', 'Admin\PartnerController@update')->name('admin.partner.update');
    Route::get('admin/partner/delete/{id}', 'Admin\PartnerController@destroy')->name('admin.partner.delete');


    Route::get('admin/worker', 'Admin\WorkerController@index')->name('admin.worker');
    Route::get('admin/worker/add', 'Admin\WorkerController@create')->name('admin.worker.create');
    Route::post('admin/worker/save', 'Admin\WorkerController@save')->name('admin.worker.save');
    Route::get('admin/worker/edit/{id}', 'Admin\WorkerController@edit')->name('admin.worker.edit');
    Route::put('admin/worker/update/{id}', 'Admin\WorkerController@update')->name('admin.worker.update');
    Route::get('admin/worker/delete/{id}', 'Admin\WorkerController@destroy')->name('admin.worker.delete');


    Route::get('admin/tips', 'Admin\TipController@index')->name('admin.tips');
    Route::get('admin/tips/add', 'Admin\TipController@create')->name('admin.tips.create');
    Route::post('admin/tips/save', 'Admin\TipController@store')->name('admin.tips.save');
    Route::get('admin/tips/edit/{id}', 'Admin\TipController@edit')->name('admin.tips.edit');
    Route::put('admin/tips/update/{id}', 'Admin\TipController@update')->name('admin.tips.update');
    Route::get('admin/tips/delete/{id}', 'Admin\TipController@destroy')->name('admin.tips.delete');
});
