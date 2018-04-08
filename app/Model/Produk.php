<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model {

  protected $table = 'produk';
  protected $primaryKey = 'produk_id';


  public function kategori() {
    return $this->belongsTo('App\Model\KategoriSub','kategori_id');
  }

  public function detail() {
    return $this->hasOne('App\Model\ProdukDetail','produk_id');
  }

}
