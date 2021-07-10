<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    function index()
    {
        // $data= Product::all();

        // return view('product',['products'=>$data]);

        $products =Product::all();
        // dd($products);
        return view('product',compact('products'));
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
}
}