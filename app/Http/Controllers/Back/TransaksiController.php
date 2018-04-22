<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller {

  public function getTransaksiViewPage($idTransaksi) {
    $transaksi = \App\Model\Transaksi::find($idTransaksi);
    $listProduk = \App\Model\TransaksiProduk::where('transaksi_id', $idTransaksi)->get();

    return view('back.transaksi_view', [
      'transaksi' => $transaksi,
      'listProduk' => $listProduk,
    ]);
  }

}
