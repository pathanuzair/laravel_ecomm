<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Cart;
use Session;

class ProductController extends Controller
{
	function index(){
		$data =Product::all();

		return view('product', ['products'=>$data]);
	}

	function detail($id){
		$data = Product::find($id);
		return view('detail',['product'=>$data]);
	}

	function search(Request $req){
		$data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();

		return view('search',['products'=>$data]);
	}

	function addToCart(Request $req){

		if ($req->session()->has('user')) {
			$cart = new Cart;
			$cart->product_id = $req->input('product_id');
			$cart->user_id = $req->session()->get('user')['id'];
			$cart->save();

			return redirect('/');

		}else{
			return redirect('/login');
		}
	}

	static function cartItem(){
		$userId = Session::get('user')['id'];

		return Cart::where('user_id',$userId)->count();
	}

}
