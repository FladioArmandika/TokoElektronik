<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TransaksiAlamat extends Model {

  protected $table = 'transaksi_alamat';
  protected $primaryKey = 'transaksi_id';

  protected $fillable = [
    'alamat','Kecamatan','kota','provinsi',
    'kode_post','no_hp'
  ];

  public function transaksi() {
    return $this->belongsTo('App\Model\Transaksi','transaksi_id');
  }




}
