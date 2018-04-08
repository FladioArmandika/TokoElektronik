<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KategoriSub extends Model {

  protected $table = 'produk_kategori_sub';
  protected $primaryKey = 'produk_kategori_sub_id';


  public function produk() {
    return $this->hasMany('App\Model\Produk');
  }

  public function kategoriFrom() {
    return $this->belongsTo('App\Model\Kategori','produk_kategori_id');
  }

}
