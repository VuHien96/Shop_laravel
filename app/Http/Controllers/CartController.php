<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function createCart(Request $request){
        $productId =$request->product_id;
        $quantity = $request->quantity;

        $product = Product::where('id',$productId)->first();

        $data['id'] =$productId;
        $data{'qty'} =$quantity;
        $data['name'] = $product->name;
        $data['price'] =$product->price;
        $data['weight']=$product->price;
        $data['options']['images'] =$product->images;
        Cart::add($data);
        return redirect()->route('carts.index');

    }

    public function showCart(){
        $categories = Category::all();
        $brands = Brand::all();
        return view('pages.cart.show_cart',compact('brands','categories'));
    }

    public function deleteCart($rowId){
        Cart::update($rowId,0);
        return redirect()->route('carts.index');
    }

    public function updateCartQuantity(Request $request){
        $rowId=$request->rowId_cart;
        $cart_quantity=$request->cart_quantity;
        Cart::update($rowId,$cart_quantity);
        return redirect()->route('carts.index');
    }

}
