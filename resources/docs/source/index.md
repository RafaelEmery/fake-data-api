---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](https://rafaelemery-fake-data-api.herokuapp.com/docs/collection.json)

<!-- END_INFO -->

#Comentários


Rotas para os comentários falsos do Banco de Dados. Os atributos foram feitos para simular um comentário em um blog, por isso usamos a rota /blog. Nestas aplicações usamos o relacionamento OneToMany: um comentário possui um post.
<!-- START_edd931b00ef7935d1277a231b9de9b43 -->
## Todos os Comentários

Retorna uma listagem de todos os posts falsos do Banco de Dados. É a rota e método mais simples possível para esta aplicação. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/blog/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/blog/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "post_id": "Id do post comentado",
    "author": "Autor do comentário",
    "content": "Conteúdo do comentário no tipo Text"
}
```
> Example response (404):

```json
{
    "message": "Dammit! The comments DB is empty... Life goes on."
}
```

### HTTP Request
`GET blog/comment`


<!-- END_edd931b00ef7935d1277a231b9de9b43 -->

<!-- START_e9a567a4edf8f2e24b55acd6f7b12229 -->
## Consulta um Comentário

Retorna um comentário de acordo com o Id passado como parâmetro de URL. Caso o produto não exista, você irá receber uma mensagem de erro 404.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/blog/comment/nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/blog/comment/nulla"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "post_id": "Id do post comentado",
    "author": "Autor do comentário",
    "content": "Conteúdo do comentário no tipo Text"
}
```
> Example response (404):

```json
{
    "message": "Dude, this comment doesn't exist here."
}
```

### HTTP Request
`GET blog/comment/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | id do comentário a ser consultado

<!-- END_e9a567a4edf8f2e24b55acd6f7b12229 -->

<!-- START_f6c4c05cb5912182c20db05a63f2660c -->
## Post por Comentário

Retorna um post do comentário feito.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/blog/comment/sint/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/blog/comment/sint/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "post_id": "Id do post comentado",
    "author": "Autor do comentário",
    "content": "Conteúdo do comentário no tipo Text"
}
```

### HTTP Request
`GET blog/comment/{comment_id}/post`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `comment_id` |  required  | comment_id do comentário a ser consultado

<!-- END_f6c4c05cb5912182c20db05a63f2660c -->

#Posts


Rotas para os posts falsos do Banco de Dados. Os atributos foram feitos para simular um post em um blog, por isso usamos a rota /blog. Nestas aplicações usamos o relacionamento OneToMany: um post possui vários comentários.
<!-- START_0934a4245a9d19e1c43d413a1085bc30 -->
## Todos os Posts

Retorna uma listagem de todos os posts falsos do Banco de Dados. É a rota e método mais simples possível para esta aplicação. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/blog/post" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/blog/post"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "title": "Título do post ",
    "author": "Autor do post",
    "content": "Conteúdo do post no tipo Text"
}
```
> Example response (404):

```json
{
    "message": "Dammit! The posts DB is empty... Life goes on."
}
```

### HTTP Request
`GET blog/post`


<!-- END_0934a4245a9d19e1c43d413a1085bc30 -->

<!-- START_42266433fea803cbf900d58ba27db133 -->
## Consulta um Post

Retorna um post de acordo com o Id passado como parâmetro de URL. Caso o produto não exista, você irá receber uma mensagem de erro 404.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/blog/post/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/blog/post/id"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "title": "Título do post ",
    "author": "Autor do post",
    "content": "Conteúdo do post no tipo Text"
}
```
> Example response (404):

```json
{
    "message": "Dammit! The posts DB is empty... Life goes on."
}
```

### HTTP Request
`GET blog/post/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | id do post a ser consultado

<!-- END_42266433fea803cbf900d58ba27db133 -->

<!-- START_534eddaa721608c04bec6a62c463bc39 -->
## Comentários por Posts

Retorna uma listagem de todos os comentários para um post buscado. Além de um post talvez não possuir comentários, podem existir duas mensagens de erro 404: caso o post buscado não exista ou caso algum dos Banco de Dados esteja vazio.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/blog/post/sunt/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/blog/post/sunt/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "post_id": "Id do post comentado",
    "author": "Autor do comentário",
    "content": "Conteúdo do comentário no tipo Text"
}
```

### HTTP Request
`GET blog/post/{post_id}/comment`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `post_id` |  required  | id do post a ser consultado

<!-- END_534eddaa721608c04bec6a62c463bc39 -->

#Produtos


Rotas para os produtos falsos do Banco de Dados. Os atributos foram feitos para simular um produto em um e-commerce, por isso usamos a rota /shop e são de diversos tipos: String, Datas, Enumeradores, Booleanos, entre outros. É importante avisar que as imagens dos produtos são imagens de gatos, não se assuste.
<!-- START_c013ef7f4b95448cdbfb01bca8d19085 -->
## Todos os Produtos

Retorna uma listagem de todos os produtos falsos do Banco de Dados. É a rota e método mais simples possível para esta aplicação. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/shop" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/shop"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}
```
> Example response (404):

```json
{
    "message": "Dammit! The product DB is empty... Life goes on."
}
```

### HTTP Request
`GET shop`


<!-- END_c013ef7f4b95448cdbfb01bca8d19085 -->

<!-- START_c6a32bd587846228ff77ef4e6023573d -->
## Produtos Disponíveis

Retorna uma listagem de todos os produtos falsos do Banco de Dados que possuem o atributo available (disponível) como verdadeiro. Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/shop/available" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/shop/available"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}
```
> Example response (404):

```json
{
    "message": "Dammit! The product DB is empty... Life goes on."
}
```

### HTTP Request
`GET shop/available`


<!-- END_c6a32bd587846228ff77ef4e6023573d -->

<!-- START_1ba1e18292c77a4c1d5b296773517868 -->
## Produtos mais Baratos

Retorna uma listagem de todos os produtos falsos do Banco de Dados ordenados em ordem crescente de value (preço). Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/shop/cheap" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/shop/cheap"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}
```
> Example response (404):

```json
{
    "message": "Dammit! The product DB is empty... Life goes on."
}
```

### HTTP Request
`GET shop/cheap`


<!-- END_1ba1e18292c77a4c1d5b296773517868 -->

<!-- START_430d77fe43717bf9749dcfb118487aab -->
## Produtos mais Caros

Retorna uma listagem de todos os produtos falsos do Banco de Dados ordenados em ordem decrescente de value (preço). Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/shop/expensive" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/shop/expensive"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}
```
> Example response (404):

```json
{
    "message": "Dammit! The product DB is empty... Life goes on."
}
```

### HTTP Request
`GET shop/expensive`


<!-- END_430d77fe43717bf9749dcfb118487aab -->

<!-- START_6be86e30a8195d9c96b96d51b16199ba -->
## Produtos mais Vendidos

Retorna uma listagem de todos os produtos falsos do Banco de Dados ordenados em ordem decrescente de sold_quantity (quantidade de itens vendidos). Caso o Banco de Dados esteja vazio, você irá receber uma mensagem de erro 404.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/shop/sold" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/shop/sold"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}
```
> Example response (404):

```json
{
    "message": "Dammit! The product DB is empty... Life goes on."
}
```

### HTTP Request
`GET shop/sold`


<!-- END_6be86e30a8195d9c96b96d51b16199ba -->

<!-- START_16b05d78db46d58323555d645b3eee59 -->
## Consulta um Produto

Retorna um produto de acordo com o Id passado como parâmetro de URL. Caso o produto não exista, você irá receber uma mensagem de erro 404.

> Example request:

```bash
curl -X GET \
    -G "https://rafaelemery-fake-data-api.herokuapp.com/shop/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://rafaelemery-fake-data-api.herokuapp.com/shop/velit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "title": "Título do produto ",
    "description": "Descrição do prodito",
    "value": "Valor em tipo Double",
    "available": "Booleano de disponibilidade do produto",
    "payment_method": "Elemento do Enum do método de pagamento",
    "sold_quantity": "Quantidade de itens vendidos em Int",
    "image": "URL da imagem do produto"
}
```
> Example response (404):

```json
{
    "message": "Dude, this product doesn't exist here."
}
```

### HTTP Request
`GET shop/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | id do produto a ser consultado

<!-- END_16b05d78db46d58323555d645b3eee59 -->


