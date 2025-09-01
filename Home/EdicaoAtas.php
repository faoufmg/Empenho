<?php
    include_once('../global.php');
    include_once("../Home/header.php");
    include_once("../conn/db.php");

    $IDProdutoEditar = $_POST['id_edicao'];
    $result = mysqli_query($link, "SELECT * from Atas WHERE Atas_id = '$IDProdutoEditar'");
    $row = mysqli_fetch_assoc($result);

    //$stat = mysqli_query($link, "SELECT * FROM StatusEmpenho");
?>


<section class="conteudo">
    <div class="container-fluid">

        <figure class="text-center">
            <h1>Editar</h1>
        </figure>

        <div class="row list-box">
      <div class="col">
        <form action="../Funcoes/FuncaoEditarAtas.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">

            <div class="form-group col-md-1 col-lg-1">
              <label class="form-label" for="AtasID"><strong>ID</strong></label>
              <input type="text" value="<?php echo $row['Atas_id']; ?>" name="AtasID" class="form-control text-center" id="AtasID" readonly>
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="NumAtaEditado"><strong>Número da Ata</strong></label>
              <input type="text" value="<?php echo $row['NumAta']?>" name="NumAtaEditado" placeholder="Digite o número da ata" class="form-control" id="NumAtaEditado" required>
            </div>

            <div class="form-group col-md-5 col-lg-5">
              <label class="form-label" for="numSeiAtaEditado"><strong>Processo SEI</strong></label>
              <input type="text" value="<?php echo $row['NumSeiAta']?>" name="numSeiAtaEditado" placeholder="Digite o processo SEI" class="form-control" id="numSeiAtaEditado" required>
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label for="IRPataEditado"><strong>IRP</strong></label>
              <input type="text" value="<?php echo $row['IRPata']?>" name="IRPataEditado" placeholder="Digite o IRP" class="form-control" id="IRPataEditado" required>
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label for="validadeAtaEditada"><strong>Validade da Ata</strong></label>
              <input type="date" value="<?php echo $row['ValidadeAta']?>" name="validadeAtaEditada" class="form-control" id="validadeAtaEditada" required>
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label for="descricaoAtaEditada"><strong>Descrição</strong></label>
              <input type="text" value="<?php echo $row['DescricaoAta']?>" name="descricaoAtaEditada" placeholder="Digite observações sobre o empenho" class="form-control" id="descricaoAtaEditada">
            </div>
            
            <div class="form-group col-md-6 col-lg-6">
              <label for="linkAtaEditada"><strong>Link</strong></label>
              <input type="text" value="<?php echo $row['LinkAta']?>" name="linkAtaEditada" placeholder="Digite o link" class="form-control" id="linkAtaEditada">
            </div>

          </div>

          <div class="col text-center mt-3">
            <button type="submit" class="btn btn-primary mr-2" style="background-color: #831D1C">Salvar</button>
            <a class="btn btn-secondary" href="../Home/EditarAtas.php">Voltar</a>
          </div>

          
          
        </form>
      </div>
    </div>
    </div>
</section>

<?php
include_once("../Home/footer.php");
?>
