<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Produk;

class AdminController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      return view('back.dashboard');
    }

    public function getProdukPage() {
      $kategoriName = \App\Model\KategoriSub::all()->pluck('nama')->toArray();
      $listProduk = \App\Model\Produk::all();
      $kategori = \App\Model\KategoriSub::all();

      return view('back.produk', [
        'listProduk' => $listProduk,
        'kategori' => $kategori
      ]);
    }

    public function getTransaksiPage() {
      $listTransaksi = \App\Model\Transaksi::all();

      $listTransaksiBayar = \App\Model\Transaksi::whereNull('tgl_bayar')
        ->orderBy('tanggal')
        ->get();
      $listTransaksiKirim = \App\Model\Transaksi::whereNull('tgl_kirim')
        ->whereNotNull('tgl_bayar')
        ->orderBy('tgl_bayar')
        ->get();



      return view('back.transaksi', [
        'listTransaksi' => $listTransaksi,
        'listTransaksiBayar' => $listTransaksiBayar,
        'listTransaksiKirim' => $listTransaksiKirim,
      ]);
    }

    public function getKeuanganPage() {
      return view('back.keuangan');
    }

    public function getCustomerPage() {
      $users = \App\User::all();

      return view('back.customer', ['users' => $users]);
    }

}















//
