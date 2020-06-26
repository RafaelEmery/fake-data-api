<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
    <script src="{{asset('/js/all.js')}}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="{{asset('/images/navbar.png')}}" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="{{asset('/images/logo.png')}}" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="http://localhost/docs/collection.json">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Comentários</h1>
<p>Rotas para os comentários falsos do Banco de Dados. Os atributos foram feitos para simular um comentário em um blog, por isso usamos a rota /blog. Nestas aplicações usamos o relacionamento OneToMany: um comentário possui um post.</p>
<!-- START_edd931b00ef7935d1277a231b9de9b43 -->
<h2>Todos os Comentários</h2>
<p>Retorna uma listagem de todos os posts falsos do Banco de Dados. É a rota e método mais simples possível para esta aplicação. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/blog/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/blog/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "post_id": "Id do post comentado",
    "author": "Autor do comentário",
    "content": "Conteúdo do comentário no tipo Text"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Dammit! The comments DB is empty... Life goes on."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET blog/comment</code></p>
<!-- END_edd931b00ef7935d1277a231b9de9b43 -->
<!-- START_e9a567a4edf8f2e24b55acd6f7b12229 -->
<h2>Consulta um Comentário</h2>
<p>Retorna um comentário de acordo com o Id passado como parâmetro de URL. Caso o produto não exista, você irá receber uma mensagem de erro 404.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/blog/comment/fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/blog/comment/fugiat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "post_id": "Id do post comentado",
    "author": "Autor do comentário",
    "content": "Conteúdo do comentário no tipo Text"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Dude, this comment doesn't exist here."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET blog/comment/{id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>id do comentário a ser consultado</td>
</tr>
</tbody>
</table>
<!-- END_e9a567a4edf8f2e24b55acd6f7b12229 -->
<!-- START_f6c4c05cb5912182c20db05a63f2660c -->
<h2>Post por Comentário</h2>
<p>Retorna um post do comentário feito.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/blog/comment/omnis/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/blog/comment/omnis/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "post_id": "Id do post comentado",
    "author": "Autor do comentário",
    "content": "Conteúdo do comentário no tipo Text"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET blog/comment/{comment_id}/post</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>comment_id</code></td>
<td>required</td>
<td>comment_id do comentário a ser consultado</td>
</tr>
</tbody>
</table>
<!-- END_f6c4c05cb5912182c20db05a63f2660c -->
<h1>Posts</h1>
<p>Rotas para os posts falsos do Banco de Dados. Os atributos foram feitos para simular um post em um blog, por isso usamos a rota /blog. Nestas aplicações usamos o relacionamento OneToMany: um post possui vários comentários.</p>
<!-- START_0934a4245a9d19e1c43d413a1085bc30 -->
<h2>Todos os Posts</h2>
<p>Retorna uma listagem de todos os posts falsos do Banco de Dados. É a rota e método mais simples possível para esta aplicação. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/blog/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/blog/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "title": "Título do post ",
    "author": "Autor do post",
    "content": "Conteúdo do post no tipo Text"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Dammit! The posts DB is empty... Life goes on."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET blog/post</code></p>
<!-- END_0934a4245a9d19e1c43d413a1085bc30 -->
<!-- START_42266433fea803cbf900d58ba27db133 -->
<h2>Consulta um Post</h2>
<p>Retorna um post de acordo com o Id passado como parâmetro de URL. Caso o produto não exista, você irá receber uma mensagem de erro 404.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/blog/post/repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/blog/post/repellat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "title": "Título do post ",
    "author": "Autor do post",
    "content": "Conteúdo do post no tipo Text"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Dammit! The posts DB is empty... Life goes on."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET blog/post/{id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>id do post a ser consultado</td>
</tr>
</tbody>
</table>
<!-- END_42266433fea803cbf900d58ba27db133 -->
<!-- START_534eddaa721608c04bec6a62c463bc39 -->
<h2>Comentários por Posts</h2>
<p>Retorna uma listagem de todos os comentários para um post buscado. Além de um post talvez não possuir comentários, podem existir duas mensagens de erro 404: caso o post buscado não exista ou caso algum dos Banco de Dados esteja vazio.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/blog/post/blanditiis/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/blog/post/blanditiis/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "post_id": "Id do post comentado",
    "author": "Autor do comentário",
    "content": "Conteúdo do comentário no tipo Text"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET blog/post/{post_id}/comment</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>post_id</code></td>
<td>required</td>
<td>id do post a ser consultado</td>
</tr>
</tbody>
</table>
<!-- END_534eddaa721608c04bec6a62c463bc39 -->
<h1>Produtos</h1>
<p>Rotas para os produtos falsos do Banco de Dados. Os atributos foram feitos para simular um produto em um e-commerce, por isso usamos a rota /shop e são de diversos tipos: String, Datas, Enumeradores, Booleanos, entre outros. É importante avisar que as imagens dos produtos são imagens de gatos, não se assuste.</p>
<!-- START_c013ef7f4b95448cdbfb01bca8d19085 -->
<h2>Todos os Produtos</h2>
<p>Retorna uma listagem de todos os produtos falsos do Banco de Dados. É a rota e método mais simples possível para esta aplicação. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/shop" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/shop"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Dammit! The product DB is empty... Life goes on."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET shop</code></p>
<!-- END_c013ef7f4b95448cdbfb01bca8d19085 -->
<!-- START_c6a32bd587846228ff77ef4e6023573d -->
<h2>Produtos Disponíveis</h2>
<p>Retorna uma listagem de todos os produtos falsos do Banco de Dados que possuem o atributo available (disponível) como verdadeiro. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/shop/available" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/shop/available"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Dammit! The product DB is empty... Life goes on."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET shop/available</code></p>
<!-- END_c6a32bd587846228ff77ef4e6023573d -->
<!-- START_1ba1e18292c77a4c1d5b296773517868 -->
<h2>Produtos mais Baratos</h2>
<p>Retorna uma listagem de todos os produtos falsos do Banco de Dados ordenados em ordem crescente de value (preço). Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/shop/cheap" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/shop/cheap"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Dammit! The product DB is empty... Life goes on."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET shop/cheap</code></p>
<!-- END_1ba1e18292c77a4c1d5b296773517868 -->
<!-- START_430d77fe43717bf9749dcfb118487aab -->
<h2>Produtos mais Caros</h2>
<p>Retorna uma listagem de todos os produtos falsos do Banco de Dados ordenados em ordem decrescente de value (preço). Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/shop/expensive" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/shop/expensive"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Dammit! The product DB is empty... Life goes on."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET shop/expensive</code></p>
<!-- END_430d77fe43717bf9749dcfb118487aab -->
<!-- START_6be86e30a8195d9c96b96d51b16199ba -->
<h2>Produtos mais Vendidos</h2>
<p>Retorna uma listagem de todos os produtos falsos do Banco de Dados ordenados em ordem decrescente de sold_quantity (quantidade de itens vendidos). Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/shop/sold" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/shop/sold"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Dammit! The product DB is empty... Life goes on."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET shop/sold</code></p>
<!-- END_6be86e30a8195d9c96b96d51b16199ba -->
<!-- START_16b05d78db46d58323555d645b3eee59 -->
<h2>Consulta um Produto</h2>
<p>Retorna um produto de acordo com o Id passado como parâmetro de URL. Caso o produto não exista, você irá receber uma mensagem de erro 404.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/shop/natus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/shop/natus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Dude, this product doesn't exist here."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET shop/{id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>id do produto a ser consultado</td>
</tr>
</tbody>
</table>
<!-- END_16b05d78db46d58323555d645b3eee59 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>