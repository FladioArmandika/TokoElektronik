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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout','Auth\LoginController@logoutUser')->name('user.logout');

// BACK OFFICE
Route::group(['prefix' => 'admin'], function() {
  Route::get('/login','AuthAdmin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login','AuthAdmin\LoginController@login')->name('admin.login.submit');
  Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');

  Route::get('/', 'AdminController@index')->name('admin.home');

  // Produk
  Route::group(['prefix' => 'produk'], function() {
    Route::get('/', 'AdminController@getProdukPage')->name('admin.produk');
    Route::get('/tambah', 'Back\ProdukController@getAddProductPage')->name('admin.produk.add.view');
    Route::get('/{idProduk}', 'Back\ProdukController@getProductViewPage')->name('admin.produk.view');
  });

  //Transaksi
  Route::group(['prefix' => 'transaksi'], function() {
    Route::get('/', 'AdminController@getTransaksiPage')->name('admin.transaksi');
  });

  //Keuangan
  Route::group(['prefix' => 'keuangan'], function() {
    Route::get('/', 'AdminController@getKeuanganPage')->name('admin.keuangan');
  });

  //Customer
  Route::group(['prefix' => 'customer'], function() {
    Route::get('/', 'AdminController@getCustomerPage')->name('admin.customer');
  });

});

























//
