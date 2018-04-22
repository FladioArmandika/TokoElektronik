<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model {

  protected $table = 'keuangan';
  protected $primaryKey = 'keuangan_id';

  protected $fillable = [
    'tanggal','total'
  ];

  public function keuangan_harian() {
    return $this->hasMany('App\Model\KeuanganHarian','keuangan_id');
  }

}
