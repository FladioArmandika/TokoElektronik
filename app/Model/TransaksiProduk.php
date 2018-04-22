<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransaksiProduk extends Model {

  protected $table = 'transaksi_produk';
  protected $primaryKey = 'transaksi_produk_id';

  protected $fillable = [
    'transaksi_id','produk_id','total_berat',
    'kuantitas','harga_total'
  ];

  public function transaksi() {
    return $this->belongsTo('App\Model\Transaksi','transaksi_id');
  }

  public function produk() {
    return $this->belongsTo('App\Model\Produk','produk_id');
  }

}
