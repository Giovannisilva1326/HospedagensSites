<?
include 'bd_index.php';
include 'bootstrap.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CLÓVIS</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">
     <img src="./imagens/cerebro.png" width="100" height="50">
   </a>
   <div class="container">
    <a class="navbar-brand" href="#">Clóvis Reina Aqui</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline my-2 my-lg-0" style="padding-left: 150px">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquise" aria-label="Search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Pesquise</button>
    </form>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sobre nós
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">História</a>
            <a class="dropdown-item" href="#">Desenvolvimentos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Jogos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="contato.php">Contato</a>
            <a class="dropdown-item" href="index.php">Sair</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container">

  <!-- Jumbotron Header -->
  <header class="jumbotron my-4">
    <h1 class="display-3">SEJA BEM-VINDO</h1>
    <p class="lead">Caso queira um orçamento, esolha um modelo abaixo e entre em contato conosco !</p>
    <!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a> -->
  </header>

  <!-- Page Features -->

  <h1 style="text-align: center;">NOSSOS MODELOS</h1>
  <div class="row text-center">

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top" src="imagens/cerebro.png" alt="">
        <div class="card-body">
          <h4 class="card-title">Básico</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Veja Mais</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top" src="imagens/cerebro.png" alt="">
        <div class="card-body">
          <h4 class="card-title">Mediano</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Veja Mais</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top" src="imagens/cerebro.png" alt="">
        <div class="card-body">
          <h4 class="card-title">Completo</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Veja Mais</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top" src="imagens/cerebro.png" alt="">
        <div class="card-body">
          <h4 class="card-title">Melhor dos melhores</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Veja Mais</a>
        </div>
      </div>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Giovanni e Matheus - 2018</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
