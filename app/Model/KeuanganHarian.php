<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KeuanganHarian extends Model {

  protected $table = 'keuangan_harian';
  protected $primaryKey = 'keuangan_harian_id';

  protected $fillable = [
    'transaksi_id','keuangan_id',
    'tanggal','harga_total',
  ];

  public function transaksi() {
    return $this->belongsTo('App\Model\Transaksi','transaksi_id');
  }

  public function keuangan() {
    return $this->belongsTo('App\Model\Keuangan','keuangan_id');
  }

}
