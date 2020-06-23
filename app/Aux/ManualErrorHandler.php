<?php

use App\Product;

class ManualErrorHandler 
{
    public function productFindValitator(Product $product, $message)
    {
        if (!$product) {
            return response()->json([
                'message' => $message
            ], 404);
        }
    }


}