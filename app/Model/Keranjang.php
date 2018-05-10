<?php

namespace App\Model;

class Keranjang  {

  public $items;
  public $totalQty = 0;
  public $totalHarga = 0;

  public function __construct($oldCart) {
    if ($oldCart) {
      $this->items = $oldCart->items;
      $this->totalQty = $oldCart->totalQty;
      $this->totalHarga = $oldCart->totalHarga;
    }
  }

  public function add($item, $idProduk) {
    $storedItem = [
      'qty' => 0,
      'harga' => $item->harga,
      'item' => $item
    ];

    if ($this->items) {
      if (array_key_exists($idProduk, $this->items)) {
        $storedItem = $this->items[$idProduk];
      }
    }
    $storedItem['qty']++;
    $storedItem['harga'] = $item->harga * $storedItem['qty'];
    $this->items[$idProduk] = $storedItem;
    $this->totalQty++;
    $this->totalHarga += $item->harga;
  }

  public function remove($item, $idProduk) {

    if($this->items) {

    }

  }

}
