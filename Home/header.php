<?php
  $nome = getenv("Shib-Person-CommonName");
  include("../Funcoes/Verifica.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Controle de Empenhos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="../Imagens/favicon.svg" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
  <link rel="stylesheet" href="../css/reset.css" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/css.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="../js/script.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
</head>
<body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg">
    <a class="logo-laranjal" href="../index.php"> <img src="../Imagens/fao_ufmg.png" width="200px" height="auto" alt="Logo Entreposto"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="../Home/Adicionar.php">Adicionar</a> </li>
        <li class="nav-item active"> <a class="nav-link" href="../Home/Editar.php">Editar</a> </li>
        <li class="nav-item active"> <a class="nav-link" href="../Home/Visualizar.php">Visualizar</a> </li>
        <!--<li class="nav-item active"> <a class="nav-link" href="../Home/Cadastro.php">Cadastro</a></li>-->
      </ul>
    </div>
    <div>
      <ul class="nav  justify-content-end">
          <li class="nav-item dropdown">
          <li class="nav-item"><strong>Usuário: </strong></li>
          <li class="nav-item"><?php echo($_SESSION["nome_cadastro"]); ?></li></li>
            <li><a href="../Funcoes/Logout.php" title="Sair"><i class="fas fa-sign-out-alt"></i></a></li>
          </ul>
    </div>  
  </nav>
</header>
</body>