<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $product = Product::all();

        return view('products.index',compact('product'));
    }

    
}

