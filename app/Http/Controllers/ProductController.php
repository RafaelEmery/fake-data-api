<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Aux\ManualErrorHandler;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return response()->json($products);
    }

    /**
     * Display the specified product by it's id.
     *
     * @param  \App\Product  $product->id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return response()->json($product); 
    }

    /**
     * Display a listing of the available products.
     *
     * @return \Illuminate\Http\Response
     */
    public function getByAvailable()
    {
        $products = Product::where('available', true)->get();

        return response()->json($products);
    }

    /**
     * Display a listing of all products by ascending order of value.
     *
     * @return \Illuminate\Http\Response
     */
    public function getByCheaper()
    {
        $products = Product::orderBy('value', 'asc')->get();

        return response()->json($products);
    }

    /**
     * Display a listing of all products by descending order of value.
     *
     * @return \Illuminate\Http\Response
     */
    public function getByMoreExpensive()
    {
        $products = Product::orderBy('value', 'desc')->get();

        return response()->json($products);
    }

    /**
     * Display a listing of all products by descending order of value.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBySoldQuantity()
    {
        $products = Product::orderBy('sold_quantity', 'desc')->get();

        return response()->json($products);
    }
}


