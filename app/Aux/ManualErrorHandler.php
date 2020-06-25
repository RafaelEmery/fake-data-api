<?php

namespace App\Aux;

use App\Product;
use App\Post;

class ManualErrorHandler 
{      
    public static function getProductsValidator($products)
    {
        if (!isset($products)) {
            return response()->json([
                'message' => "Dammit! The product DB is empty... Life goes on."
            ], 404);
        }
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

    public static function commentFindValidator(Comment $comment, $message)
    {
        //
    }
}