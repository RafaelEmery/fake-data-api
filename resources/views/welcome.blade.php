<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fake Data API</title>

  <!-- Bootstrap core CSS -->
  <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/template/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="/template/css/landing-page.css" rel="stylesheet">

</head>

<body>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">API em Laravel feita para gerar dados falsos e aumentar a produtividade!</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="row">
                <div class="col-12 col-md-6" style="margin-left: 150px;">
                <a type="button" target="_blank" href="http://rafaelemery-fake-data-api.herokuapp.com/docs/" class="btn btn-block btn-lg btn-primary" style="border-radius: 8px;">Leia a documentação</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-game-controller m-auto text-primary"></i>
            </div>
            <h3>Produtos</h3>
            <p class="lead mb-0">Produtos de um e-commerce e com vários tipos de dados.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-notebook m-auto text-primary"></i>
            </div>
            <h3>Posts</h3>
            <p class="lead mb-0">Posts simples de um blog com seus comentários.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-speech m-auto text-primary"></i>
            </div>
            <h3>Comentários</h3>
            <p class="lead mb-0">Comentários simples relacionados com seu respectivo post.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/template/img/bg-docs.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Documentação</h2>
          <p class="lead mb-0">
              Gerada com o pacote <a target="_blank" href="https://github.com/mpociot/laravel-apidoc-generator">laravel-apidoc-generator</a> com o objetivo de facilitar o consumo e entendimento da API. 
              Por enquanto, só possui o consumo da API por <i>bash</i> e <i>Javascript</i>.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('/template/img/bg-rest.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Padrão REST</h2>
          <p class="lead mb-0">
              Feita com base no <i>Representational State Transfer</i> (REST), onde seguiremos o protocolo HTTP com quatro métodos básicos:
              GET, POST, PUT, DELETE. Por enquanto, somente as requisições do tipo GET funcionam.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/template/img/bg-json.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Respostas em JSON</h2>
          <p class="lead mb-0">
                Os retornos para as requisições chegam em formato JSON (Javascript Object Notation), o que garante simplicidade para a API. Caso você use o Google Chrome, use a extensão
                <a target="_blank" href="https://chrome.google.com/webstore/detail/json-viewer/gbmdgpbipfallnflgajpaliibnhdgobh?hl=pt-BR">JSON Viewer</a> para melhor visualização.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('/template/img/bg-heroku.png');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Heroku + PostgreSQL</h2>
          <p class="lead mb-0">
              Hospedagem usando a plataforma <a target = "_blank" href="https://heroku.com">Heroku</a> para teste de aplicações em uso na Web.
              Como banco de dados, foi usado o <a target="_blank" href="https://www.postgresql.org/">PostgreSQL</a> através de um <i>add-on</i> do Heroku chamado <i>Heroku Postgres</i>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
                Gostaria de testar as respostas?
            </li>
            <li class="list-inline-item">
              <a href="https://rafaelemery-fake-data-api.herokuapp.com/shop" target="_blank">Produtos</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="https://rafaelemery-fake-data-api.herokuapp.com/blog/post" target="_blank">Posts</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="https://rafaelemery-fake-data-api.herokuapp.com/blog/comment" target="_blank">Comentários</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">Feito por &copy; <a href="http://rafaelemery.github.io">Rafael Emery</a> 2020.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/template/vendor/jquery/jquery.min.js"></script>
  <script src="/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
