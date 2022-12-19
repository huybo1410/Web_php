<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function getChitiet(Request $req,$id){
        $product = Product::where('id',$req->id)->first();
        
    	return view('page.product_detail',compact('product'));
    }
}
