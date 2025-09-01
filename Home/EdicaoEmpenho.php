<?php
    include_once('../global.php');
    include_once("../Home/header.php");
    include_once("../conn/db.php");

    $IDProdutoEditar = $_POST['id_edicao'];
    $result = mysqli_query($link, "SELECT * from Empenho WHERE Empenho_id = '$IDProdutoEditar'");
    $row = mysqli_fetch_assoc($result);

    $stat = mysqli_query($link, "SELECT * FROM StatusEmpenho");
    $EmpenhoIRP = mysqli_query($link, "SELECT DISTINCT IRPempenho FROM Empenho");
?>


<section class="conteudo">
    <div class="container-fluid">

        <figure class="text-center">
            <h1>Editar</h1>
        </figure>

        <div class="row list-box">
      <div class="col">
        <form action="../Funcoes/FuncaoEditarEmpenho.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">

            <div class="form-group col-md-1 col-lg-1">
              <label class="form-label" for="EmpenhoID"><strong>ID</strong></label>
              <input type="text" value="<?php echo $row['Empenho_id']; ?>" name="EmpenhoID" class="form-control text-center" id="EmpenhoID" readonly>
            </div>

            <div class="form-group col-md-5 col-lg-5">
                <label class="form-label" for="categoria_editada"><strong>IRP</strong></label>
                <select name="IRPempenhoeditado" data-size="6" data-live-search="true" class="selectpicker" data-width="100%" id="IRPempenhoeditado" >
                    <?php
                    while ($irp = mysqli_fetch_assoc($EmpenhoIRP)) {
                        $selected = ($irp['IRPempenho'] == $row['IRPempenho']) ? 'selected' : '';
                        echo '<option value="' . $irp['IRPempenho'] . '" ' . $selected . '>' . $irp['IRPempenho'] . '</option>';
                    }    
                    ?>    
                </select>
            </div> 

            <div class="form-group col-md-6 col-lg-6">
              <label for="processoSEIEditado"><strong>Processo SEI</strong></label>
              <input type="text" value="<?php echo $row['ProcessoSEI']?>" name="processoSEIEditado" placeholder="Digite o número do processo SEI" class="form-control" id="processoSEIEditado" min="0" max="999999999999" >
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="empenhoEditado"><strong>Empenho</strong></label>
              <input type="text" value="<?php echo $row['Empenho']?>" name="empenhoEditado" placeholder="Digite o número do empenho" class="form-control" id="empenhoEditado" >
            </div>  

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="fornecedorEditado"><strong>Fornecedor</strong></label>
              <input type="text" value="<?php echo $row['Fornecedor']?>" name="fornecedorEditado" placeholder="Digite o fornecedor" class="form-control" id="fornecedorEditado" >
            </div>
          
            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="valorNotaEditado"><strong>Valor</strong></label>
              <input type="text" value="<?php echo $row['ValorNota']?>" name="valorNotaEditado" placeholder="Digite o valor da nota" class="form-control" id="valorNotaEditado" >
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="linkEmpenhoEditado"><strong>Link</strong></label>
              <input type="text" value="<?php echo $row['LinkEmpenho']?>" name="linkEmpenhoEditado" placeholder="Adicione o link referente ao empenho" class="form-control" id="linkEmpenhoEditado" >
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="especificacaoEmpenhoEditada"><strong>Especificação do Material</strong></label>
              <input type="text" value="<?php echo $row['EspecificacaoEmpenho']?>" name="especificacaoEmpenhoEditada" placeholder="Especifique o tipo de material" class="form-control" id="especificacaoEmpenhoEditada" >
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label for="dataReciboEditada"><strong>Data do Recebimento</strong></label>
              <input type="date" value="<?php echo $row['DataRecibo']?>" name="dataReciboEditada" class="form-control" id="dataReciboEditada" >
            </div>  
            
            <div class="form-group col-md-6 col-lg-6">
              <label for="prevEnvioEditada"><strong>Previsão de Envio</strong></label>
              <input type="date" value="<?php echo $row['PrevEnvio']?>" name="prevEnvioEditada" class="form-control" id="prevEnvioEditada" >
            </div>  

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="categoria_editada"><strong>Status</strong></label>
              <select name="statusEditado" data-size="6" data-live-search="true" class="selectpicker" data-width="100%" id="statusEditado" >
                <?php
                    while ($status = mysqli_fetch_assoc($stat)) {
                      $selected = ($status['Status'] == $row['Status']) ? 'selected' : '';
                      echo '<option value="' . $status['Status'] . '" ' . $selected . '>' . $status['Status'] . '</option>';
                    }      
                    ?>        
                </select>
              </div>      
              
            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="nomeContatoEditado"><strong>Nome Contato</strong></label>
              <input type="text" value="<?php echo $row['NomeContato']?>" name="nomeContatoEditado" placeholder="Digite o nome do fornecedor" class="form-control" id="nomeContatoEditado" >
            </div>  

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="telContatoEditado"><strong>Telefone Contato</strong></label>
              <input type="text" value="<?php echo $row['TelContato']?>" name="telContatoEditado" placeholder="Digite o telefone do fornecedor" class="form-control" id="telContatoEditado" >
            </div>  

            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="situacaoEditada"><strong>Situação</strong></label>
              <textarea value="<?php echo $row['Situacao']?>" name="situacaoEditada" placeholder="Digite a situação do empenho" class="form-control" id="situacaoEditada"></textarea>
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label for="observacaoEditada"><strong>Observação</strong></label>
              <textarea value="<?php echo $row['Observacao']?>" name="observacaoEditada" placeholder="Digite observações sobre o empenho" class="form-control" id="observacaoEditada"></textarea>
            </div>  

          </div>

          <div class="col text-center mt-3">
            <button type="submit" class="btn btn-primary mr-2" style="background-color: #831D1C">Salvar</button>
            <a class="btn btn-secondary" href="../Home/EditarEmpenho.php">Voltar</a>
          </div>

          
          
        </form>
      </div>
    </div>
    </div>
</section>

<?php
include_once("../Home/footer.php");
?>
