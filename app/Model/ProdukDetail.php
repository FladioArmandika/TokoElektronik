<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProdukDetail extends Model {

  protected $table = 'produk_detail';
  protected $primaryKey = 'produk_id';

  public function produk() {
    return $this->belongsTo('App\Model\Produk','produk_id');
  }

}
