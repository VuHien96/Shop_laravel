<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function detailOrder($id){
        $order = Order::find($id);
        $orderDetail = OrderDetails::find($id);
        return view('admin.order.detail',compact('order','orderDetail'));
    }
}
