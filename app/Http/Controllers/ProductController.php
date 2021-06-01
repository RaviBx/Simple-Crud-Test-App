<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->toArray();
        return array_reverse($products);
    }


    public function store(Request $request)
    {

        $product = new Product([

                'name' => $request->input('name'),
                'details' => $request->input('details')

        ]);

        $product->save();

        return response()->json('Product Created !');
        
    }


    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);


    }


    public function update($id, Request $request)
    {

        $product = Product::find($id);
        $product->update($request->all());

        return response()->json('Product Updated !');


    }


    public function destry($id)
    {
        
        $product = Product::find($id);

        $product->delete();

        return response()->json('Product Deleted !');


    }



}
