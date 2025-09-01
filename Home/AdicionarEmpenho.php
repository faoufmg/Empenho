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
            
            <div class="form-group col-md-6 col-lg-6">
              <label class="form-label" for="SeletorEntrada"><strong>IRP</strong></label>
                <select class="selectpicker" data-width="100%" data-size="6" id="IRPempenho" data-live-search="true" name ="IRPempenho" title="Selecione o IRP" onchange="ProcessoSEI()" >
                <option selected>Selecione o IRP</option>
                  <?php
                    while($row = mysqli_fetch_array($pesquisaIRP)) {
                      echo "<option>".$row['IRPata']."</option>";
                    }
                  ?>      
                </select>
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
