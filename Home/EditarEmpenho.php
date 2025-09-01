<?php
  include_once('../global.php');
  include_once("../Home/header.php");
  include_once("../conn/db.php");

  $row = mysqli_query($link, "SELECT * from Empenho"); 
?>

<section class="listar">
  <div class="container-fluid">
    <figure class="text-center">
      <h1>Editar Empenhos</h1>
    </figure>

    <form id="edit-form" method="POST" action="../Home/EdicaoEmpenho.php">
        <table id="EmpenhoEditar" class="table table-striped table-bordered" style="width:100%; text-align:center;">
            <thead class="table-dark">
                <tr>
                <th scope="col"><span class="font-weight-bolder">ID</span></th>
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
                <th scope="col"><span class="font-weight-bolder"></span></th>
                </tr>
            </thead>

            <tbody id="table-body">
                <?php
                while($result = mysqli_fetch_array($row)){
                  echo "<tr>";
                  echo "<form action='' method='POST' name='Editar' id='Editar'>";
                  echo "<input type='hidden' name='id_edicao' value='" . $result['Empenho_id'] . "'>";
                  echo "<td>" . $result['Empenho_id'] . "</td>";
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
                  echo "<td><button type='submit' formaction='../Home/EdicaoEmpenho.php' class='btn btn-primary'>Editar</button></td>";
                  echo "</form>";
                  echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </form>

    <div class="col text-center mt-3">
      <a class="btn btn-secondary" href="../Home/Editar.php">Voltar</a>
    </div>

  </div>
</section>

<?php
  include_once("../Home/footer.php");
?>