<?php
  include_once('../global.php');
  include_once("../Home/header.php");
  include_once("../conn/db.php");

  $row = mysqli_query($link, "SELECT * from Atas");
?>

<section class="listar">
  <div class="container-fluid">
    <figure class="text-center">
      <h1>Listagem de Atas</h1>
    </figure>

    <table id= "Atas" class="table table-striped table-bordered" style="width:100%; text-align:center;">
      <thead class="table-dark">
        <tr>
        <th scope="col"><span class="font-weight-bolder">Número da Ata</span></th>
        <th scope="col"><span class="font-weight-bolder">Processo SEI</span></th>
        <th scope="col"><span class="font-weight-bolder">IRP</span></th>
        <th scope="col"><span class="font-weight-bolder">Validade</span></th>
        <th scope="col"><span class="font-weight-bolder">Descrição</span></th>
        <th scope="col"><span class="font-weight-bolder">Link</span></th>
        </tr>
      </thead>

      <tbody id="table-body">
        <?php
          while($result = mysqli_fetch_array($row)){
            echo "<tr>";
            echo "<td>" . $result['NumAta'] . "</td>";
            echo "<td><a href='" . $result['NumSeiAta'] . "' target='_blank'>" . $result['NumSeiAta'] . "</a></td>";
            echo "<td>" . $result['IRPata'] . "</td>";
            echo "<td>" . date('d/m/Y', strtotime($result['ValidadeAta'])) . "</td>";
            echo "<td>" . $result['DescricaoAta'] . "</td>";
            echo "<td><a href='" . $result['LinkAta'] . "' target='_blank'>" . $result['LinkAta'] . "</a></td>";
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