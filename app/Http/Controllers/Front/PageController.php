<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller {

  public function getHomePage() {
    $listKategori = \App\Model\Kategori::orderBy('nama')->get();

    return view('front.home', [
      'listKategori' => $listKategori,
    ]);
  }

  public function getAboutUsPage() {
    $listKategori = \App\Model\Kategori::orderBy('nama')->get();

    return view('front.tentang', [
      'listKategori' => $listKategori,
    ]);
  }

  public function getKontakPage() {
    $listKategori = \App\Model\Kategori::orderBy('nama')->get();

    return view('front.kontak', [
      'listKategori' => $listKategori,
    ]);
  }



}
