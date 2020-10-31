<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductsController extends Controller
{
    //
	public function index(){
		return view('products');	
	}
	
	//Add Products
	public function add_product(Request $request){ 
		
		$products = new products();
		$products->product_name = $request->product_price;
		$products->quantity_in_stock = $request->quantity_in_stock;
		$products->price_per_item = $request->price_per_item;
		$products->total_value_number = $request->price_per_item * $request->quantity_in_stock;
		$saveRespone = $products->save();
		if($saveRespone == true)
		{ 
			$products = products::all();
			echo view('products_details', ['products'=>$products]);
		}
		else{
			echo view('products_details');
		}
		
	}
}
