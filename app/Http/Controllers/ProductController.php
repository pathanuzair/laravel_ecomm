<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

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

}
