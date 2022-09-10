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
	return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::get('user/edit', ['as' => 'users.edit', 'uses' => 'App\Http\Controllers\UserController@edit']);
	Route::get('create/users', ['as' => 'create.users', 'uses' => 'App\Http\Controllers\UserController@create']);
	Route::get('create/destroy/{id}', ['as' => 'users.destroy', 'uses' => 'App\Http\Controllers\UserController@destroy']);
	Route::post('store/users', ['as' => 'store.user', 'uses' => 'App\Http\Controllers\UserController@store']);
	Route::put('update/users', ['as' => 'users.update', 'uses' => 'App\Http\Controllers\UserController@update']);
	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
	Route::get('map', function () {
		return view('pages.maps');
	})->name('map');
	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');
	Route::get('table-list', function () {
		return view('pages.tables');
	})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('create/roles', ['as' => 'roles.create', 'uses' => 'App\Http\Controllers\Roles@create']);
	Route::post('store/roles', ['as' => 'roles.store', 'uses' => 'App\Http\Controllers\Roles@store']);
	Route::get('store/edit/{id}', ['as' => 'roles.edit', 'uses' => 'App\Http\Controllers\Roles@edit']);
	Route::post('update/roles/{id}', ['as' => 'roles.update', 'uses' => 'App\Http\Controllers\Roles@update']);
	Route::get('store/destroy/{id}', ['as' => 'roles.destroy', 'uses' => 'App\Http\Controllers\Roles@destroy']);
	Route::get('index/roles', ['as' => 'roles.index', 'uses' => 'App\Http\Controllers\Roles@index']);
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('saims/index', ['as' => 'saims.index', 'uses' => 'App\Http\Controllers\SaimsControllers@index']);
	Route::get('saims/monitoring', ['as' => 'saims.mnt', 'uses' => 'App\Http\Controllers\SaimsControllers@monitoring']);
	Route::get('saims/index/pui', ['as' => 'saims.indexPUI', 'uses' => 'App\Http\Controllers\SaimsControllers@indexPUI']);
	Route::get('saims/index/history-pui', ['as' => 'saims.historyPUI', 'uses' => 'App\Http\Controllers\SaimsControllers@historyPUI']);
	Route::get('saims/index/sai-manual', ['as' => 'saims.smanual', 'uses' => 'App\Http\Controllers\SaimsControllers@smanual']);
	Route::get('saims/dtableSAIMANUAL', ['as' => 'saims.dtableSAIMANUAL', 'uses' => 'App\Http\Controllers\SaimsControllers@dtableSAIMANUAL']);
	Route::post('saims/getDetailSalesInvoice', ['as' => 'getDetailSalesInvoice.so', 'uses' => 'App\Http\Controllers\SaimsControllers@getDetailSalesInvoice']);
	Route::post('saims/EventApproved', ['as' => 'e.EventApproved', 'uses' => 'App\Http\Controllers\SaimsControllers@EventApproved']);
	Route::post('saims/EventDiss', ['as' => 'e.EventDiss', 'uses' => 'App\Http\Controllers\SaimsControllers@EventDiss']);
	Route::post('saims/CheckDataSAIM', ['as' => 'e.CheckDataSAIM', 'uses' => 'App\Http\Controllers\SaimsControllers@CheckDataSAIM']);
	Route::post('saims/__getDetailIDGR', ['as' => 'saims.__getDetailIDGR', 'uses' => 'App\Http\Controllers\SaimsControllers@__getDetailIDGR']);
	Route::post('saims/__getDetailIDGR_only', ['as' => 'saims.__getDetailIDGR_only', 'uses' => 'App\Http\Controllers\SaimsControllers@__getDetailIDGR_only']);
	Route::post('saims/__getDataPO', ['as' => 'saims.__getDataPO', 'uses' => 'App\Http\Controllers\SaimsControllers@__getDataPO']);
	Route::get('saims/SalesInvoice', ['as' => 'saims.SalesInvoiceRVK', 'uses' => 'App\Http\Controllers\SaimsControllers@SalesInvoiceRVK']);
	Route::get('saims/PUIRVK', ['as' => 'saims.PUIRVK', 'uses' => 'App\Http\Controllers\SaimsControllers@PUIRVK']);
	Route::post('saims/store', ['as' => 'saims.store', 'uses' => 'App\Http\Controllers\SaimsControllers@store']);
	Route::post('saims/savemanuallysaim', ['as' => 'saims.savemanuallysaim', 'uses' => 'App\Http\Controllers\SaimsControllers@savemanuallysaim']);
	Route::post('saims/saveSIM_lsH', ['as' => 'saims.saveSIM_lsH', 'uses' => 'App\Http\Controllers\SaimsControllers@saveSIM_lsH']);
	Route::post('saims/updatemanuallysaims', ['as' => 'saims.updatemanuallysaims', 'uses' => 'App\Http\Controllers\SaimsControllers@updatemanuallysaims']);
	Route::post('saims/detailSalesIvoice', ['as' => 'saims.detailSalesIvoice', 'uses' => 'App\Http\Controllers\SaimsControllers@detailSalesIvoice']);
	Route::post('saims/detailPurchaseInvoiceH', ['as' => 'saims.detailPurchaseInvoiceH', 'uses' => 'App\Http\Controllers\SaimsControllers@detailPurchaseInvoiceH']);
	Route::get('saims/create', ['as' => 'saims.create', 'uses' => 'App\Http\Controllers\SaimsControllers@create']);
	Route::get('saims/delete/{id}', ['as' => 'saims.delete', 'uses' => 'App\Http\Controllers\SaimsControllers@delete']);
	Route::get('saims/edit/{id}/{sai}', ['as' => 'saims.edit', 'uses' => 'App\Http\Controllers\SaimsControllers@edit']);
	Route::get('saims/report/print/{rpt}/{checksum?}', ['as' => 'saims.reports', 'uses' => 'App\Http\Controllers\SaimsControllers@reports']);
	Route::get('saims/report/print/{rpt}/preview', ['as' => 'saims.rpt_preview', 'uses' => 'App\Http\Controllers\SaimsControllers@rpt_preview']);
});

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
	Route::get('map', function () {
		return view('pages.maps');
	})->name('map');
	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');
	Route::get('table-list', function () {
		return view('pages.tables');
	})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
