<?php

namespace App\Http\Controllers\Back;
use App\Model\Produk;
use App\Model\Kategori;
use App\Model\KategoriSub;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller {
    //


    public function getProductViewPage($idProduk) {
      // $produk = DB::table('produk')->where('id_produk',$idProduk)->first();


      $produk = \App\Model\Produk::find($idProduk);
      $listKategori = \App\Model\KategoriSub::all();

      return view('back.produk_view',[
        'produk' => $produk,
        'listKategori' => $listKategori,
      ]);
    }

    public function getAddProductPage() {

      $listKategori = \App\Model\KategoriSub::all();

      return view('back.produk_add', ['listKategori' => $listKategori]);
    }

    public function addProduct(Request $request) {
      $produk = new \App\Model\Produk;
      $produk->produk_id = rand(20000000,29999999);
      $produk->nama_produk = $request['nama_produk'];
      $produk->kategori_id = $request['kategori_id'];
      $produk->berat = $request['berat'];
      $produk->harga = $request['harga'];
      $produk->stok = $request['stok'];
      $produk->deskripsi = $request['deskripsi'];
      $produk->save();

      return redirect()->route('admin.produk');
    }

    public function removeProduct($idProduk) {

    }



}
