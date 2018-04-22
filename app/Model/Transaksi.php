<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model {

    protected $table = 'transaksi';
    protected $primaryKey = 'transaksi_id';

    protected $fillable = [
      'customer_id','no_resi','jasa_pengiriman','harga_produk',
      'harga_ongkir','harga_total',
    ];

    public function customer() {
      return $this->belongsTo('App\User');
    }

    public function alamat() {
      return $this->hasOne('App\Model\TransaksiAlamat','transaksi_id');
    }

    public function produk() {
      return $this->hasMany('App\Model\TransaksiAlamat','transaksi_id');
    }

    public function keuangan_harian() {
      return $this->hasMany('App\Model\KeuanganHarian','transaksi_id');
    }



}
