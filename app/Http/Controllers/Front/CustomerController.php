<?php

namespace App\Http\Controllers\Front;

use Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller {

  public function getProfilePage() {
    $listKategori = \App\Model\Kategori::all();

    return view('front.user_profile', [
      'listKategori' => $listKategori,
    ]);
  }

  public function addToCart(Request $request, $idProduk) {
    if (Auth::guest()) {
      return redirect()->route('login');
    } else {
      $produk = \App\Model\Produk::find($idProduk);
      $oldCart = Session::has('keranjang') ? Session::get('keranjang') : null;
      $keranjang = new \App\Model\Keranjang($oldCart);
      $keranjang->add($produk,$produk->produk_id);

      $request->session()->put('keranjang',$keranjang);
      return redirect()->route('customer.produk');
    }
  }

  public function getCartPage() {
    if (Auth::guest()) {
      return redirect()->route('login');
    } else {
      $listKategori = \App\Model\Kategori::all();
      if( !Session::has('keranjang')) {
        return view('front.cart', [
          'listKategori' => $listKategori,
          'listProduk' => null,
        ]);
      }

      $oldCart = Session::get('keranjang');
      $cart = new \App\Model\Keranjang($oldCart);

      return view('front.cart', [
        'listKategori' => $listKategori,
        'listProduk' => $cart->items,
        'totalHarga' => $cart->totalHarga,
      ]);
    }
  }

  public function checkout(Request $request) {
    if (Auth::guest()) {
      return redirect()->route('login');
    } else {
      $transaksi = new \App\Model\Transaksi;
      $transaksi->transaksi_id = rand(20000000,29999999);
      $transaksi->customer_id = $request['customer_id'];
      $transaksi->jasa_pengiriman = $request['kurir'];
      $transaksi->harga_produk = $request['totalharga'];
      $transaksi->harga_ongkir = $request['ongkir'];
      $transaksi->harga_total = $request['totalbelanja'];
      $transaksi->no_rekening = $request['bank_no'];
      $transaksi->nama_rekening = $request['bank_name'];
      $transaksi->alamat()->alamat = $request['alamat'];
      $transaksi->save();

      $oldCart = Session::get('keranjang');
      $cart = new \App\Model\Keranjang($oldCart);

      foreach ($cart->items as $item) {
        $produkBeli = new \App\Model\TransaksiProduk;
        $produkBeli->produk_id = $item['item']['produk_id'];
        $produkBeli->transaksi_id = $transaksi->transaksi_id;
        $produkBeli->kuantitas = $item['qty'];
        $produkBeli->harga_total = $cart->totalHarga;
        $produkBeli->total_berat = 4 * $item['qty'];
        $produkBeli->save();
      }

      Session::forget('keranjang');

      return redirect()->route('customer.cart');
    }
  }

}
