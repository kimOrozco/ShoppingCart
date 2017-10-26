<?php

namespace App\Http\Controllers;
use DB;
use App\CartItem;
use App\Product;
use Auth;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function addProduct(Request $request){
        $product_id = $request -> product_id;
        $customer_id = Auth::user()->id;
    	$product_name = $request -> product_name;
    	$image_path = $request -> image_path;
    	$price = $request -> price;

        $check = DB::table('cart_items') -> where([
            ['product_id', $product_id],
            ['customer_id', $customer_id],
        ]) -> count();

        if($check == 1) {
            $exist = DB::table('cart_items') -> where([
            ['product_id', $product_id],
            ['customer_id', $customer_id],
        ]) -> increment('quantity');

            Session::flash('status', 'Product already in cart. Quantity increased by 1.');
            return redirect('/home');
        } else {
    
        	$cart = new CartItem;
            $cart -> product_id = $product_id;
            $cart -> customer_id = $customer_id;
        	$cart -> product_name = $product_name;
        	$cart -> image_path = $image_path;
        	$cart -> price = $price;
        	$cart -> save();
            
            Session::flash('status', 'Product added to cart.');
        	return redirect('/home');
        }

    }

    public function showCart(Request $request){
        $customer_id = Auth::user()->id;
        $products = DB::table('cart_items') -> where('customer_id', $customer_id) -> get();

        return view('shoppingCart', [
            'products' => $products
        ]);
    }
    public function deleteProduct(Request $request, $id){
        $customer_id = $request -> customer_id;
        
        $delete = DB::table('cart_items')->where([
            ['customer_id', '=', $customer_id],
            ['product_id', '=', $id],
            ])->delete();
        return redirect('/home/show');
    }
}
