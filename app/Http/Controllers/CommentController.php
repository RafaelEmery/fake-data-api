<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

/**
 * @group Comentários
 * 
 * Rotas para os comentários falsos do Banco de Dados. Os atributos foram feitos para simular um comentário em um blog, por isso usamos a rota /blog. Nestas aplicações usamos o relacionamento OneToMany: um comentário possui um post.
 */
class CommentController extends Controller
{
    /**
     * Todos os Comentários
     * 
     * Retorna uma listagem de todos os posts falsos do Banco de Dados. É a rota e método mais simples possível para esta aplicação. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.
     * 
     * @response 200 {
     *      "post_id" : "Id do post comentado",
     *      "author" : "Autor do comentário",
     *      "content" : "Conteúdo do comentário no tipo Text"
     * }  
     * 
     * @response 404 {
     *      "message" : "Dammit! The comments DB is empty... Life goes on."
     * }
     * 
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
     * Consulta um Comentário
     * 
     * Retorna um comentário de acordo com o Id passado como parâmetro de URL. Caso o produto não exista, você irá receber uma mensagem de erro 404.
     * 
     * @urlParam id required id do comentário a ser consultado
     * 
     * @response 200 {
     *      "post_id" : "Id do post comentado",
     *      "author" : "Autor do comentário",
     *      "content" : "Conteúdo do comentário no tipo Text"
     * }  
     * 
     * @response 404 {
     *      "message" : "Dude, this comment doesn't exist here."
     * }
     * 
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
     * Post por Comentário
     * 
     * Retorna um post do comentário feito.
     * 
     * @urlParam comment_id required comment_id do comentário a ser consultado
     * 
     * @response 200 {
     *      "post_id" : "Id do post comentado",
     *      "author" : "Autor do comentário",
     *      "content" : "Conteúdo do comentário no tipo Text"
     * }  
     * 
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
