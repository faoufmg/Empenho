<?php
  include_once('../global.php');
  include_once("../conn/db.php");
  $nome = getenv("Shib-Person-CommonName");
  include("../Funcoes/Verifica.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>testes</title>
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

<?php
  include_once('../global.php');
  include_once("../Home/header.php");
  include_once("../conn/db.php");

  $pesquisaStatus = mysqli_query($link, "SELECT Status FROM StatusEmpenho ORDER BY Status ASC");
  $pesquisaIRP = mysqli_query($link, "SELECT IRPata FROM Atas ORDER BY IRPata ASC");
?>

<section class="conteudo">
  <div class="container-fluid">

    <figure class="text-center">
      <h1>Acrescentar Novo Empenho</h1>
    </figure>

    <div class="row list-box">
      <div class="col">
        <form action="../Funcoes/FuncaoAdicionarEmpenho.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            
            <div class="form-group col-md-12 col-lg-12">
              <label class="form-label" for="testeIRP"><strong>IRP</strong></label>
                <select class="selectpicker" data-width="100%" data-size="6" id="testeIRP" data-live-search="true" name ="testeIRP" title="Selecione o IRP" onchange="teste(this.value)" >
                <option selected>Selecione o IRP</option>
                  <?php
                    while($row = mysqli_fetch_array($pesquisaIRP)) {
                      echo "<option>".$row['IRPata']."</option>";
                    }
                  ?>      
                </select>
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label for="IRP"><strong>IRP</strong></label>
              <input type="text" name="IRP" placeholder="Digite o número do processo" class="form-control" id="IRP" >
            </div>
            
            <div class="form-group col-md-6 col-lg-6">
              <label for="processoSEI"><strong>Processo SEI</strong></label>
              <input type="text" name="processoSEI" placeholder="Digite o número do processo" class="form-control" id="processoSEI" >
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="empenho"><strong>Empenho</strong></label>
              <input type="text" name="empenho" placeholder="Digite o empenho" class="form-control" id="empenho" >
            </div>      
            
            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="fornecedor"><strong>Fornecedor</strong></label>
              <input type="text" name="fornecedor" placeholder="Digite o fornecedor" class="form-control" id="fornecedor">
            </div>  

            <div class="form-group col-md-6 col-lg-6">
              <label for="valorNota"><strong>Valor da Nota</strong></label>
              <input type="text" name="valorNota" placeholder="Digite o valor da nota" class="form-control" id="valorNota" >
            </div>  

            <div class="form-group col-md-6 col-lg-6">
              <label for="linkEmpenho"><strong>Link</strong></label>
              <input type="text" name="linkEmpenho" placeholder="Adicione o link referente ao empenho" class="form-control" id="linkEmpenho">
            </div>
            
            <div class="form-group col-md-6 col-lg-6">
              <label for="especificacaoEmpenho"><strong>Especificação  do Material</strong></label>
              <input type="text" name="especificacaoEmpenho" placeholder="Especifique o material" class="form-control" id="especificacaoEmpenho">
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label for="dataRecibo"><strong>Data do Recebimento da Nota</strong></label>
              <input type="date" name="dataRecibo" class="form-control" id="dataRecibo" >
            </div>        

            <div class="form-group col-md-6 col-lg-6">
              <label for="prevEnvio"><strong>Previsão de Envio</strong></label>
              <input type="date" name="prevEnvio" class="form-control" id="prevEnvio">
            </div>        

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="status"><strong>Status</strong></label>
                <select class="selectpicker" data-width="100%" data-size="6" id="status" data-live-search="true" name ="status" title="Selecione o status do empenho" >
                  <?php
                    while($row = mysqli_fetch_array($pesquisaStatus)) {
                      echo "<option>".$row['Status']."</option>";
                    }      
                  ?>                  
                </select>
            </div>            

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="nomeContato"><strong>Nome do Contato</strong></label>
              <input type="text" name="nomeContato" placeholder="Digite o nome do contato" class="form-control" id="nomeContato">
            </div>  

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="telContato"><strong>Telefone de Contato</strong></label>
              <input type="text" name="telContato" placeholder="Digite o telefone do contato" class="form-control" id="telContato">
            </div>  

            <div class="form-group col-md-6 col-lg-6">
              <label for="situacao"><strong>Situação</strong></label>
              <textarea name="situacao" placeholder="Digite a situação do empenho" class="form-control" id="situacao"></textarea>
            </div>  

            <div class="form-group col-md-6 col-lg-6">
              <label for="observacao"><strong>Observação</strong></label>
              <textarea name="observacao" placeholder="Digite observações sobre o empenho" class="form-control" id="observacao"></textarea>
            </div>  

          </div>

          <div class="col text-center mt-3">
            <button type="submit" class="btn btn-primary mr-2" style="background-color: #831D1C">Cadastrar</button>
            <a class="btn btn-secondary" href="../Home/Adicionar.php">Voltar</a>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</section>

<?php
  include_once("../Home/footer.php");
?>
