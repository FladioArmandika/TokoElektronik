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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Front\PageController@getHomePage')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout','Auth\LoginController@logoutUser')->name('user.logout');

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////// FRONT OFFICE ////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
Route::group(['prefix' => 'produk'], function() {
  Route::get('/', 'Front\ProdukController@getProdukPage')->name('customer.produk');
  Route::get('/{idProduk}', 'Front\ProdukController@getProdukViewPage')->name('customer.produk.view');
  Route::get('/k/{idKategori}', 'Front\ProdukController@getProdukByCategory')->name('customer.produk.bycategory');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
  Route::get('/{idCustomer}/p', 'Front\CustomerController@getProfilePage')->name('customer.profile');
  Route::get('/add-to-cart/{idProduk}', 'Front\CustomerController@addToCart')->name('customer.produk.addtocart');
  Route::get('/cart', 'Front\CustomerController@getCartPage')->name('customer.cart');
  Route::post('/checkout', 'Front\CustomerController@checkout')->name('customer.checkout');

});



Route::get('/tentang', 'Front\PageController@getAboutUsPage')->name('customer.tentang');
Route::get('/kontak', 'Front\PageController@getKontakPage')->name('customer.kontak');

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////// BACK OFFICE ////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
Route::group(['prefix' => 'admin'], function() {
  Route::get('/login','AuthAdmin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login','AuthAdmin\LoginController@login')->name('admin.login.submit');
  Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');

  Route::get('/', 'AdminController@index')->name('admin.home');

  // Produk
  Route::group(['prefix' => 'produk'], function() {
    Route::get('/', 'AdminController@getProdukPage')->name('admin.produk');
    Route::get('/tambah', 'Back\ProdukController@getAddProductPage')->name('admin.produk.add.view');
    Route::post('/tambah', 'Back\ProdukController@addProduct')->name('admin.produk.add');
    Route::get('/{idProduk}', 'Back\ProdukController@getProductViewPage')->name('admin.produk.view');
  });

  //Transaksi
  Route::group(['prefix' => 'transaksi'], function() {
    Route::get('/', 'AdminController@getTransaksiPage')->name('admin.transaksi');
    Route::get('/{idTransaksi}', 'Back\TransaksiController@getTransaksiViewPage')->name('admin.transaksi.view');
  });

  //Keuangan
  Route::group(['prefix' => 'keuangan'], function() {
    Route::get('/', 'AdminController@getKeuanganPage')->name('admin.keuangan');
  });

  //Customer
  Route::group(['prefix' => 'customer'], function() {
    Route::get('/', 'AdminController@getCustomerPage')->name('admin.customer');
    Route::get('/{idCustomer}', 'Back\CustomerController@getCustomerViewPage')->name('admin.customer.view');
  });

});

























//
