<?php
	include_once('../Home/header.php');
?>

<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Controle de Empenhos</title>
  <meta name="viewport" content="widht=device-width, initial-scale=1"/>
  <link rel="shortcut icon" href="../Imagens/favicon.svg"/>
</head>
<body>

<section class="principal bg-color-cinza" height="100%">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="row">
          
          <div class="col-md-12 col-lg-12">
            <div class="box align-middle">
              <a href="../Home/Adicionar.php">
              <img src="../Imagens/icons/criar.svg" width="65px" height="65px" alt="Adicionar Produto">
              <p class="acoes text-center align-middle"><span class="font-weight-bold">Adicionar</span></p>
              </a>
            </div>
          </div>

          <div class="col-md-12 col-lg-12">
            <div class="box align-middle">
              <a href="../Home/Editar.php">
              <img src="../Imagens/icons/editar.svg" width="65px" height="65px" alt="Retirar Produto">
              <p class="acoes text-center align-middle"><span class="font-weight-bold">Editar</span></p>
              </a>
            </div>
          </div>

          <div class="col-md-12 col-lg-12">
            <div class="box align-middle">
              <a href="../Home/Visualizar.php">
              <img src="../Imagens/icons/listar.svg" width="65px" height="65px" alt="Listar Produtos">
              <p class="acoes text-center align-middle"><span class="font-weight-bold">Visualizar</span></p>
              </a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
</body>


<?php
  include_once('../Home/footer.php');
?>