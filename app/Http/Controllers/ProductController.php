<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function home()
    {
        return view('create');
    }

    public function viewProduct()
    {
        $products=Product::all();
        return view('products',compact('products'));
    }

    public function edit($id)
    {
        $product=Product::where('id',$id)->first();

        dd('product');
        return view('edit', compact('product'));
    }

    public function input(Request $request)
    {
        Product::create([
            'product_name'=>$request->product_name,
            'price'=>$request->price,
            'stock'=>$request->stock
        ]);

        return redirect('/products');
    }
}
