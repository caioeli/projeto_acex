<?php
session_start();
require '../controller/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="reset.css?v=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(168, 110, 207);">
    
    <div class="container-fluid">
      <a href="../view/home.php">
        <img src="../img/logo.png" alt="Logo do site" class="imsHeader">
      </a>      
       <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span href="" class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link"  style="color:white;" href="/projeto_acex/view/home.php">Home</a>
          </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Tópicos
          </a>
          <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="/projeto_acex/view/cardSurdez.php"> Surdez</a></li>
            <li><a class="dropdown-item" href="/projeto_acex/view/cardAutismo.php">Autismo </a></li>
            <li><a class="dropdown-item" href="/projeto_acex/view/cardCadeirantes.php"> Cadeirantes</a></li>
            <li><a class="dropdown-item" href="/projeto_acex/view/cardCegueira.php"> Cegueira </a></li>
            <li><a class="dropdown-item" href="/projeto_acex/view/cardDown.php"> Síndrome de Down</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a  class="nav-link" style="color:white;" href="#">Ajuda</a>
          </li>
        </ul>
      </div>
    </div>

  </nav>
</header>
   

</body>
</html>
