<?php

namespace App\Aux;

use App\Product;
use App\Post;

class ManualErrorHandler 
{      

    public static function productFindValidator(Product $product, $message)
    {
        // if (!$product) {
        //     return response()->json([
        //         'message' => $message
        //     ], 404);
        // }
        // return null;
    }

    public static function postFindValidator(Post $post, $message)
    {
        if (!$post) {
            return response()->json([
                'message' => $message
            ], 404);
        }
        return null;
    }
}