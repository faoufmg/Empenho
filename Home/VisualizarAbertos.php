<?php
  include_once('../global.php');
  include_once("../Home/header.php");
  include_once("../conn/db.php");

  $row = mysqli_query($link, "SELECT * from Empenho WHERE Status != 'Concluído'");
?>

<section class="listar">
  <div class="container-fluid">
    <figure class="text-center">
      <h1>Listagem de Empenhos em Aberto</h1>
    </figure>

    <table id= "Empenho" class="table table-striped table-bordered" style="width:100%; text-align:center;">
      <thead class="table-dark">
        <tr>
        <th scope="col"><span class="font-weight-bolder">IRP</span></th>
        <th scope="col"><span class="font-weight-bolder">Processo SEI</span></th>
        <th scope="col"><span class="font-weight-bolder">Empenho</span></th>
        <th scope="col"><span class="font-weight-bolder">Fornecedor</span></th>
        <th scope="col"><span class="font-weight-bolder">Valor</span></th>
        <th scope="col"><span class="font-weight-bolder">Link</span></th>
        <th scope="col"><span class="font-weight-bolder">Especificação do Material</span></th>
        <th scope="col"><span class="font-weight-bolder">Data do Recebimento</span></th>
        <th scope="col"><span class="font-weight-bolder">Previsão de Envio</span></th>
        <th scope="col"><span class="font-weight-bolder">Status</span></th>
        <th scope="col"><span class="font-weight-bolder">Nome de Contato</span></th>
        <th scope="col"><span class="font-weight-bolder">Telefone de Contato</span></th>
        <th scope="col"><span class="font-weight-bolder">Situação</span></th>
        <th scope="col"><span class="font-weight-bolder">Observação</span></th>
        </tr>
      </thead>

      <tbody id="table-body">
        <?php
          while($result = mysqli_fetch_array($row)){
            echo "<tr>";
            echo "<td>" . $result['IRPempenho'] . "</td>";
            echo "<td>" . $result['ProcessoSEI'] . "</td>";
            echo "<td>" . $result['Empenho'] . "</td>";
            echo "<td>" . $result['Fornecedor'] . "</td>";
            echo "<td>" . $result['ValorNota'] . "</td>";
            echo "<td><a href='" . $result['LinkEmpenho'] . "' target='_blank'>" . $result['LinkEmpenho'] . "</a></td>";
            echo "<td>" . $result['EspecificacaoEmpenho'] . "</td>";
            echo "<td>" . date('d/m/Y', strtotime($result['DataRecibo'])) . "</td>";
            echo "<td>" . date('d/m/Y', strtotime($result['PrevEnvio'])) . "</td>";
            echo "<td>" . $result['Status'] . "</td>";
            echo "<td>" . $result['NomeContato'] . "</td>";
            echo "<td>" . $result['TelContato'] . "</td>";
            echo "<td>" . $result['Situacao'] . "</td>";
            echo "<td>" . $result['Observacao'] . "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>

    <div class="col text-center mt-3">
      <a class="btn btn-secondary" href="../Home/Visualizar.php">Voltar</a>
    </div>
  </div>
</section>
<script src="script.js"></script>

<?php
  include_once("../Home/footer.php");
?>