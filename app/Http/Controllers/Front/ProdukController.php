<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller {

  public function getProdukPage() {

    $listProduk = \App\Model\Produk::paginate(10);
    $listKategori = \App\Model\Kategori::orderBy('nama')->get();

    return view('front.produk', [
      'listProduk' => $listProduk,
      'listKategori' => $listKategori,
    ]);

  }

  public function getProdukViewPage($idProduk) {
    $produk = \App\Model\Produk::find($idProduk);
    $listKategori = \App\Model\Kategori::all();

    return view('front.produk_view', [
      'produk' => $produk,
      'listKategori' => $listKategori,
    ]);
  }

  public function getProdukByCategory($idKategori) {
    $listProduk = \App\Model\Produk::whereHas('kategori', function($query) use ($idKategori) {
      $query->where('kategori_from','=',$idKategori);
    })->paginate(15);
    $listKategori = \App\Model\Kategori::all();

    return view('front.produk', [
      'listProduk' => $listProduk,
      'listKategori' => $listKategori,
    ]);

  }


}






















//
