<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model {

  protected $table = 'produk_kategori';
  protected $primaryKey = 'produk_kategori_id';

  public function kategoriSub() {
    return $this->hasMany('App\Model\KategoriSub','kategori_from');
  }

}
