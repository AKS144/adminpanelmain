<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        $products               =   new Product();
        $products->name         =   $request->name;
        $products->image        =   $request->image;
        $products->description  =   $request->description;
        $products->save();

        return back();

    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $products               =   Product::find($id);
        $products->name         =   $request->name;
        $products->image        =   $request->image;
        $products->description  =   $request->description;
        $products->save();

        return back();
    }


    public function destroy(Product $product)
    {
        //
    }
}
