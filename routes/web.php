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
    Route::get('admin/partner/add', 'Admin\PartnerController@create')->name('admin.partner.create');
    Route::post('admin/partner/save', 'Admin\PartnerController@store')->name('admin.partner.save');
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


    Route::get('admin/type_material', 'Admin\TypeMaterialController@index')->name('admin.type_material');
    Route::get('admin/type_material/add', 'Admin\TypeMaterialController@create')->name('admin.type_material.create');
    Route::post('admin/type_material/save', 'Admin\TypeMaterialController@store')->name('admin.type_material.save');
    Route::get('admin/type_material/edit/{id}', 'Admin\TypeMaterialController@edit')->name('admin.type_material.edit');
    Route::put('admin/type_material/update/{id}', 'Admin\TypeMaterialController@update')->name('admin.type_material.update');
    Route::get('admin/type_material/delete/{id}', 'Admin\TypeMaterialController@destroy')->name('admin.type_material.delete');

    Route::get('admin/routes', 'Admin\RouteController@index')->name('admin.routes');
    Route::get('admin/routes/add', 'Admin\RouteController@create')->name('admin.routes.create');
    Route::post('admin/routes/save', 'Admin\RouteController@store')->name('admin.routes.save');
    Route::get('admin/routes/edit/{id}', 'Admin\RouteController@edit')->name('admin.routes.edit');
    Route::put('admin/routes/update/{id}', 'Admin\RouteController@update')->name('admin.routes.update');
    Route::get('admin/routes/delete/{id}', 'Admin\RouteController@destroy')->name('admin.routes.delete');

    Route::get('admin/locals', 'Admin\LocalController@index')->name('admin.locals');
    Route::get('admin/locals/add', 'Admin\LocalController@create')->name('admin.locals.create');
    Route::post('admin/locals/save', 'Admin\LocalController@store')->name('admin.locals.save');
    Route::get('admin/locals/edit/{id}', 'Admin\LocalController@edit')->name('admin.locals.edit');
    Route::put('admin/locals/update/{id}', 'Admin\LocalController@update')->name('admin.locals.update');
    Route::get('admin/locals/delete/{id}', 'Admin\LocalController@destroy')->name('admin.locals.delete');
});
