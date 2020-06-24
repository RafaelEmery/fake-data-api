<?php

use App\Product;
use App\Post;

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

    public function postFindValidator(Post $post, $message)
    {
        if (!$post) {
            return response()->json([
                'message' => $message
            ], 404);
        }
    }
}