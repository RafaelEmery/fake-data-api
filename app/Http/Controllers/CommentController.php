<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of comments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        if ($comments->isEmpty()) {
            return response()->json([
                'message' => "Dammit! The comments DB is empty... Life goes on."
            ], 404);
        }

        return response()->json($comments);
    }

    
    /**
     * Display the specified comment.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json([
                'message' => "Dude, this comment doesn't exist here."
            ], 404);
        }

        return response()->json($comment);
    }

    /**
     * Display a listing of post for the specified comment.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostByComment($comment_id)
    {
        $comment = Comment::find($comment_id);

        if (!$comment) {
            return response()->json([
                'message' => "Dude, this comment doesn't exist here."
            ], 404);
        }

        $post = $comment->post;

        return response()->json($post);
    }
}
