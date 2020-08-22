<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductRequest;

use Illuminate\Http\Request;

/**
 * @group Produtos
 * 
 * Rotas para os produtos falsos do Banco de Dados. Os atributos foram feitos para simular um produto em um e-commerce, por isso usamos a rota /shop e são de diversos tipos: String, Datas, Enumeradores, Booleanos, entre outros. É importante avisar que as imagens dos produtos são imagens de gatos, não se assuste.
 */
class ProductController extends Controller
{
    /**
     * Todos os Produtos
     * 
     * Retorna uma listagem de todos os produtos falsos do Banco de Dados. É a rota e método mais simples possível para esta aplicação. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.
     * 
     * @response 200 {
     *      "title" : "Título do produto ",
     *      "description" : "Descrição do prodito",
     *      "value" : "Valor em tipo Double",
     *      "available" : "Booleano de disponibilidade do produto",
     *      "payment_method" : "Elemento do Enum do método de pagamento",
     *      "sold_quantity" : "Quantidade de itens vendidos em Int",
     *      "image" : "URL da imagem do produto"
     * }  
     * 
     * @response 404 {
     *      "message" : "Dammit! The product DB is empty... Life goes on."
     * }
     * 
     */
    public function index()
    {
        $products = Product::all();

        if ($products->isEmpty()) {
            return response()->json([
                'message' => "Dammit! The product DB is empty... Life goes on."
            ], 404);
        }

        return response()->json($products);
    }

    /**
     * Criar um produto
     * 
     * Cria uma entidade de produto, com as informações passadas como parâmetro no corpo da requisição
     * 
     * @response 200 {
     *      "message": "Product created!"
     * }  
     * 
     * @response 404 {
     *      "message" : "Dammit! The product DB is empty... Life goes on."
     * }
     * 
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $product = Product::create($data);

        if($product->isEmpty()) {
            return response()->json([
                'message' => "Something is wrong with the creation!"
            ], 404);
        }

        return response()->json([
            'message' => "Product created!"
        ], 200);
    }

    //Testing version with trycatch block
    public function alternateStore(ProductRequest $request) 
    {
        try {
            Product::create($request->all());

            return response()->json([
                'message' => "Product created!"
            ], 200); 
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something is wrong with the creation!"
            ], 404);
        }
    }

    /**
     * Consulta um Produto
     * 
     * Retorna um produto de acordo com o Id passado como parâmetro de URL. Caso o produto não exista, você irá receber uma mensagem de erro 404.
     * 
     * @urlParam id required id do produto a ser consultado
     * 
     * @response 200 {
     *      "title" : "Título do produto ",
     *      "description" : "Descrição do prodito",
     *      "value" : "Valor em tipo Double",
     *      "available" : "Booleano de disponibilidade do produto",
     *      "payment_method" : "Elemento do Enum do método de pagamento",
     *      "sold_quantity" : "Quantidade de itens vendidos em Int",
     *      "image" : "URL da imagem do produto"
     * }    
     * 
     * @response 404 {
     *      "message" : "Dude, this product doesn't exist here."
     * }
     */
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'message' => "Dude, this product doesn't exist here."
            ], 404);
        }

        return response()->json($product); 
    }

    /**
     * Produtos Disponíveis
     * 
     * Retorna uma listagem de todos os produtos falsos do Banco de Dados que possuem o atributo available (disponível) como verdadeiro. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.
     * 
     * @response 200 {
     *      "title" : "Título do produto ",
     *      "description" : "Descrição do prodito",
     *      "value" : "Valor em tipo Double",
     *      "available" : "Booleano de disponibilidade do produto",
     *      "payment_method" : "Elemento do Enum do método de pagamento",
     *      "sold_quantity" : "Quantidade de itens vendidos em Int",
     *      "image" : "URL da imagem do produto"
     * }  
     * 
     * @response 404 {
     *      "message" : "Dammit! The product DB is empty... Life goes on."
     * }
     * 
     */
    public function getByAvailable()
    {
        $products = Product::where('available', true)->get();

        if ($products->isEmpty()) {
            return response()->json([
                'message' => "Dammit! The product DB is empty... Life goes on."
            ], 404);
        }

        return response()->json($products);
    }

     /**
     * Produtos mais Baratos
     * 
     * Retorna uma listagem de todos os produtos falsos do Banco de Dados ordenados em ordem crescente de value (preço). Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.
     * 
     * @response 200 {
     *      "title" : "Título do produto ",
     *      "description" : "Descrição do prodito",
     *      "value" : "Valor em tipo Double",
     *      "available" : "Booleano de disponibilidade do produto",
     *      "payment_method" : "Elemento do Enum do método de pagamento",
     *      "sold_quantity" : "Quantidade de itens vendidos em Int",
     *      "image" : "URL da imagem do produto"
     * }  
     * 
     * @response 404 {
     *      "message" : "Dammit! The product DB is empty... Life goes on."
     * }
     * 
     */
    public function getByCheaper()
    {
        $products = Product::orderBy('value', 'asc')->get();

        if ($products->isEmpty()) {
            return response()->json([
                'message' => "Dammit! The product DB is empty... Life goes on."
            ], 404);
        }

        return response()->json($products);
    }

    /**
     * Produtos mais Caros
     * 
     * Retorna uma listagem de todos os produtos falsos do Banco de Dados ordenados em ordem decrescente de value (preço). Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.
     * 
     * @response 200 {
     *      "title" : "Título do produto ",
     *      "description" : "Descrição do prodito",
     *      "value" : "Valor em tipo Double",
     *      "available" : "Booleano de disponibilidade do produto",
     *      "payment_method" : "Elemento do Enum do método de pagamento",
     *      "sold_quantity" : "Quantidade de itens vendidos em Int",
     *      "image" : "URL da imagem do produto"
     * }  
     * 
     * @response 404 {
     *      "message" : "Dammit! The product DB is empty... Life goes on."
     * }
     * 
     */
    public function getByMoreExpensive()
    {
        $products = Product::orderBy('value', 'desc')->get();

        if ($products->isEmpty()) {
            return response()->json([
                'message' => "Dammit! The product DB is empty... Life goes on."
            ], 404);
        }

        return response()->json($products);
    }

    /**
     * Produtos mais Vendidos
     * 
     * Retorna uma listagem de todos os produtos falsos do Banco de Dados ordenados em ordem decrescente de sold_quantity (quantidade de itens vendidos). Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.
     * 
     * @response 200 {
     *      "title" : "Título do produto ",
     *      "description" : "Descrição do prodito",
     *      "value" : "Valor em tipo Double",
     *      "available" : "Booleano de disponibilidade do produto",
     *      "payment_method" : "Elemento do Enum do método de pagamento",
     *      "sold_quantity" : "Quantidade de itens vendidos em Int",
     *      "image" : "URL da imagem do produto"
     * }  
     * 
     * @response 404 {
     *      "message" : "Dammit! The product DB is empty... Life goes on."
     * }
     * 
     */
    public function getBySoldQuantity()
    {
        $products = Product::orderBy('sold_quantity', 'desc')->get();

        if ($products->isEmpty()) {
            return response()->json([
                'message' => "Dammit! The product DB is empty... Life goes on."
            ], 404);
        }

        return response()->json($products);
    }
}


