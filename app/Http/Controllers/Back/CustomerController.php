<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller {


  public function getCustomerViewPage($idCustomer) {
    $customer = \App\User::find($idCustomer);

    return view('back.customer_view', [
      'customer' => $customer,
    ]);
  }


}
