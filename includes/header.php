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
        <img href="/projeto_acex/view/home.php" src="../img/logo.png" alt="Logo do site" style="margin-right: 10px; width: 100px; height: 45px;">
       <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span href="" class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link"  style="color:white;" href="/projeto_acex/view/home.php">Homeeee</a>
          </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Tópicos
          </a>
          <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#"> Surdez</a></li>
            <li><a class="dropdown-item" href="#"> Sidrome de donw</a></li>
            <li><a class="dropdown-item" href="#"> PCDs</a></li>
            <li><a class="dropdown-item" href="#"> 4 Rodas </a></li>
            <li><a class="dropdown-item" href="#"> Cegueta</a></li>
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
