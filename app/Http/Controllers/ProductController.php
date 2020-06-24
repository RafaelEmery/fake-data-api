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

        // ManualErrorHandler::productFindValidator($products, 'There are no products in DataBase!');

        return response()->json($products);
    }

    // /**
    //  * Store a newly created product in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $data = $request->all();
    //     $product = Product::create($create);

    //     return response()->json($product);
    // }

    /**
     * Display the specified product by it's id.
     *
     * @param  \App\Product  $product->id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        ManualErrorHandler::productFindValidator($product, 'Product not found!');

        return response()->json($product); 
    }

    // /**
    //  * Update the specified product in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Product  $product->id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Product $product)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified product from storage.
    //  *
    //  * @param  \App\Product  $product->id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $product = Product::find($id);

    //     $product->delete();
        
    //     return response()->json([
    //         'message' => 'Product deleted!'
    //     ], 200);
    // }

    /**
     * Display the specified product by it's name.
     *
     * @param  \App\Product  $product->name
     * @return \Illuminate\Http\Response
     */
    public function showByName($name)
    {
        $product = Product::where('name', $name)->get();

        // ManualErrorHandler::productFindValidator($product, 'Product not found!');

        return response()->json($product); 
    }

    /**
     * Display a listing of the active products.
     *
     * @return \Illuminate\Http\Response
     */
    public function getByActive()
    {
        $products = Product::where('active', true)->get();

        // ManualErrorHandler::productFindValidator($products, 'There are no products in DataBase!');

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

        // ManualErrorHandler::productFindValidator($products, 'There are no products in DataBase!');

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
        
        // ManualErrorHandler::productFindValidator($products, 'There are no products in DataBase!');

        return response()->json($products);
    }
}
