<?php
  include_once('../global.php');
  include_once("../Home/header.php");
  include_once("../conn/db.php");

  $pesquisaStatus = mysqli_query($link, "SELECT Status FROM StatusEmpenho ORDER BY Status ASC");
?>

<section class="conteudo">
  <div class="container-fluid">

    <figure class="text-center">
      <h1>Acrescentar Nova Ata</h1>
    </figure>

    <div class="row list-box">
      <div class="col">
        <form action="../Funcoes/FuncaoAdicionarAta.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            
            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="numAta"><strong>Número da Ata</strong></label>
              <input type="text" name="numAta" placeholder="Digite o número da ata" class="form-control" id="numAta">
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="numSeiAta"><strong>Número do Processo SEI</strong></label>
              <input type="text" name="numSeiAta" placeholder="Digite o número do processo SEI da ata" class="form-control" id="numSeiAta">
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label for="IRPata"><strong>IRP</strong></label>
              <input type="text" name="IRPata" placeholder="Digite o IRP" class="form-control" id="IRPata">
            </div>
            
            <div class="form-group col-md-6 col-lg-6">
              <label for="validadeAta"><strong>Validade da Ata</strong></label>
              <input type="date" name="validadeAta" class="form-control" id="validadeAta">
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label for="linkAta"><strong>Link</strong></label>
              <input type="text" name="linkAta" placeholder="Digite o link" class="form-control" id="linkAta">
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label for="descricaoAta"><strong>Descrição</strong></label>
              <textarea name="descricaoAta" placeholder="Descreva a ata" class="form-control" id="descricaoAta"></textarea>
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
