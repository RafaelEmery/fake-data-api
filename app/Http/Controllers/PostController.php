<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

/**
 * @group Posts
 * 
 * Rotas para os posts falsos do Banco de Dados. Os atributos foram feitos para simular um post em um blog, por isso usamos a rota /blog. Nestas aplicações usamos o relacionamento OneToMany: um post possui vários comentários.
 */
class PostController extends Controller
{
    /**
     * Todos os Posts
     * 
     * Retorna uma listagem de todos os posts falsos do Banco de Dados. É a rota e método mais simples possível para esta aplicação. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.
     * 
     * @response 200 {
     *      "title" : "Título do post ",
     *      "author" : "Autor do post",
     *      "content" : "Conteúdo do post no tipo Text"
     * }  
     * 
     * @response 404 {
     *      "message" : "Dammit! The posts DB is empty... Life goes on."
     * }
     * 
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
     * Consulta um Post
     * 
     * Retorna um post de acordo com o Id passado como parâmetro de URL. Caso o produto não exista, você irá receber uma mensagem de erro 404.
     * 
     * @urlParam id required id do post a ser consultado
     * 
     * @response 200 {
     *      "title" : "Título do post ",
     *      "author" : "Autor do post",
     *      "content" : "Conteúdo do post no tipo Text"
     * }  
     * 
     * @response 404 {
     *      "message" : "Dammit! The posts DB is empty... Life goes on."
     * }
     * 
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
     * Comentários por Posts
     * 
     * Retorna uma listagem de todos os comentários para um post buscado. Além de um post talvez não possuir comentários, podem existir duas mensagens de erro 404: caso o post buscado não exista ou caso algum dos Banco de Dados esteja vazio.
     * 
     * @urlParam post_id required id do post a ser consultado
     * 
     * @response 200 {
     *      "post_id" : "Id do post comentado",
     *      "author" : "Autor do comentário",
     *      "content" : "Conteúdo do comentário no tipo Text"
     * }  
     * 
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
