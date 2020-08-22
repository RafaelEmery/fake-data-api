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
          <h1 class="mb-5">Laravel RESTful API to generate fake data and increase productivity!</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="row">
                <div class="col-12 col-md-6" style="margin-left: 150px;">
                <a type="button" target="_blank" href="http://rafaelemery-fake-data-api.herokuapp.com/docs/" class="btn btn-block btn-lg btn-primary" style="border-radius: 8px;">Read the Docs (pt-BR)</a>
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
            <h3>Products</h3>
            <p class="lead mb-0">E-commerce products that contains multiple data types.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-notebook m-auto text-primary"></i>
            </div>
            <h3>Posts</h3>
            <p class="lead mb-0">Simple blog posts with comments.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-speech m-auto text-primary"></i>
            </div>
            <h3>Comments</h3>
            <p class="lead mb-0">Simple comments related with their posts.</p>
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
          <h2>Documentation</h2>
          <p class="lead mb-0">
              Made using the <a target="_blank" href="https://github.com/mpociot/laravel-apidoc-generator">laravel-apidoc-generator</a> package to made things much easier!
              So far, the docs just show the consuming of API by <i>bash</i> and <i>Javascript</i>.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('/template/img/bg-rest.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>RESTful</h2>
          <p class="lead mb-0">
              Based on the <i>Representational State Transfer</i> (REST), where we use the HTTP protocol with the four main methods:
              GET, POST, PUT, DELETE. 
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/template/img/bg-json.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>JSON responses</h2>
          <p class="lead mb-0">
                The responses for the requests are in JSON format (Javascript Object Notation), which makes our API much more simple and fast.If you use Google Chrome, you can use the
                <a target="_blank" href="https://chrome.google.com/webstore/detail/json-viewer/gbmdgpbipfallnflgajpaliibnhdgobh?hl=pt-BR">JSON Viewer</a> extension to use JSONs.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('/template/img/bg-heroku.png');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Heroku + PostgreSQL</h2>
          <p class="lead mb-0">
              Deployed using the <a target = "_blank" href="https://heroku.com">Heroku</a> platform for testing web applications.
              As database, i used the <a target="_blank" href="https://www.postgresql.org/">PostgreSQL</a> along with an <i>add-on</i> from Heroku called <i>Heroku Postgres</i>.
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
                Would you like to test the responses right now?
            </li>
            <li class="list-inline-item">
              <a href="https://rafaelemery-fake-data-api.herokuapp.com/shop" target="_blank">Products</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="https://rafaelemery-fake-data-api.herokuapp.com/blog/post" target="_blank">Posts</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="https://rafaelemery-fake-data-api.herokuapp.com/blog/comment" target="_blank">Comments</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">Made by &copy; <a href="http://rafaelemery.github.io">Rafael Emery</a> 2020.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/template/vendor/jquery/jquery.min.js"></script>
  <script src="/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
