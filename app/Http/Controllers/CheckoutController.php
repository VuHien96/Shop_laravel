<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function loginCheckout()
    {
        return view('pages.checkout.login_checkout');
    }

    public function createCustomer(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = md5($request->password);
        $customer->phone = '';
        $customer->save();

        $lastInsertId = $customer->id;
        Session::put('customerId', $lastInsertId);
        return redirect()->route('checkout');

    }

    public function checkout()
    {
        return view('pages.checkout.checkout');
    }

    public function createCheckoutCustomer(Request $request)
    {

        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['notes'] = $request->notes;
        $data['address'] = $request->address;
        $data['method'] = 1;

        $shipping_id = DB::table('shippings')->insertGetId($data);

        Session::put('shipping_id', $shipping_id);

        return Redirect::to('/payment');

    }

    public function payment()
    {
        return view('pages.checkout.payment');
    }

    public function orderPlace(Request $request)
    {
        $payment = new Payment();
        $payment->method = $request->payment_option;
        $payment->status = 1;
        $payment->save();
        $payment_id = $payment->id;

        //insert order
        $order = new Order();
        $order->customer_id = Session::get('customerId');
        $order->shipping_id = Session::get('shipping_id');
        $order->payment_id = $payment_id;
        $order->order_total = Cart::total();
        $order->status = 1;
        $order->save();
        $order_id = $order->id;

        //insert order_details
        $content = Cart::content();
        foreach ($content as $v_content) {
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['name'] = $v_content->name;
            $order_d_data['price'] = $v_content->price;
            $order_d_data['quantity'] = $v_content->qty;
            DB::table('order_details')->insert($order_d_data);
        }
        if ($payment->method == 1) {

            echo 'Thanh toán thẻ ATM';

        } elseif ($payment->method == 2) {
            Cart::destroy();
            $categories = Category::all();
            $brands = Brand::all();
            return view('pages.checkout.handcash',compact('categories','brands'));
        } else {
            echo 'Thẻ ghi nợ';

        }

    }

    public function loginCustomer(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);

        $result = Customer::where('email', $email)->where('password', $password)->first();

        if ($result) {
            Session::put('customerId', $result->id);
            return redirect()->route('checkout');
        } else {
            return redirect()->route('checkout.login');
        }
    }

    public function logoutCheckout()
    {
        Session::flush();
        return redirect()->route('checkout.login');
    }

    public function AuthLogin(){

        $admin_id = Session::get('id');
        if($admin_id){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login')->send();
        }
    }

    public function getOrders(){
        $this->AuthLogin();
        $orders = DB::table('orders')
            ->join('customers','orders.customer_id','=','customers.id')
            ->select('orders.*','customers.name')
            ->orderBy('orders.id','desc')
            ->get();
        return view('admin.order.list',compact('orders'));
    }
}
