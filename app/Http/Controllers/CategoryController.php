<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class CategoryController extends Controller
{
    public function index (){
        $products = new product();
        $rs_product = $products -> Product();
        return view('product', compact('rs_product'));
    }
}