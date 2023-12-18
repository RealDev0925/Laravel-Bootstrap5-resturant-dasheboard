<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Order_detail extends Controller {
    public function index() {
        return view( 'content.delivery.orders.orders-detail' );
    }
}
