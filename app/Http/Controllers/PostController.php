<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of all posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        if ($posts->isEmpty()) {
            return response()->json([
                'message' => "Dammit! The posts DB is empty... Life goes on."
            ], 404);
        }

        return response()->json($posts);
    }

    /**
     * Display the specified post.
     *
     * @param  \App\Post  $post->id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        
        if (!$post) {
            return response()->json([
                'message' => "Dude, this post doesn't exist here."
            ], 404);
        }

        return response()->json($post);
    }

    /**
     * Display a listing of comments for the specified post.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCommentsByPost($post_id)
    {
        $post = Post::find($post_id);

        if (!$post) {
            return response()->json([
                'message' => "Dude, this post doesn't exist here."
            ], 404);
        }

        $comments = $post->comments;

        if ($comments->isEmpty()) {
            return response()->json([
                'message' => "Dude, there are no comments for this post."
            ], 404);
        }

        return response()->json($comments);
    }
}
