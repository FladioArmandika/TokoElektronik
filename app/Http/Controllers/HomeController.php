<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

      $listKategori = \App\Model\Kategori::orderBy('nama')->get();

      return view('front.home', [
        'listKategori' => $listKategori,
      ]);
    }

    public function getHomePage() {
      $listKategori = \App\Model\Kategori::orderBy('nama')->get();

      return view('front.home', [
        'listKategori' => $listKategori,
      ]);
    }


}
