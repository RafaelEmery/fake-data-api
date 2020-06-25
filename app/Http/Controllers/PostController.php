<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return response()->json($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post->id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return response()->json($post);
    }

    public function getCommentsByPost($post_id)
    {
        $post = Post::find($post_id);
        $comments = $post->comments;

        return response()->json($comments);
    }
}
