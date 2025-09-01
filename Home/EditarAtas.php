<?php
  include_once('../global.php');
  include_once("../Home/header.php");
  include_once("../conn/db.php");

  $row = mysqli_query($link, "SELECT * from Atas"); 
?>

<section class="listar">
  <div class="container-fluid">
    <figure class="text-center">
      <h1>Editar Atas</h1>
    </figure>

    <form id="edit-form" method="POST" action="../Home/EdicaoAtas.php">
        <table id="AtasEditar" class="table table-striped table-bordered" style="width:100%; text-align:center;">
            <thead class="table-dark">
                <tr>
                <th scope="col"><span class="font-weight-bolder">ID</span></th>
                <th scope="col"><span class="font-weight-bolder">Número da Ata</span></th>
                <th scope="col"><span class="font-weight-bolder">Processo SEI</span></th>
                <th scope="col"><span class="font-weight-bolder">IRP</span></th>
                <th scope="col"><span class="font-weight-bolder">Validade da Ata</span></th>
                <th scope="col"><span class="font-weight-bolder">Descrição</span></th>
                <th scope="col"><span class="font-weight-bolder">Link</span></th>
                <th scope="col"><span class="font-weight-bolder"></span></th>
                </tr>
            </thead>

            <tbody id="table-body">
                <?php
                while($result = mysqli_fetch_array($row)){
                  echo "<tr>";
                  echo "<form action='' method='POST' name='Editar' id='Editar'>";
                  echo "<input type='hidden' name='id_edicao' value='" . $result['Atas_id'] . "'>";
                  echo "<td>" . $result['Atas_id'] . "</td>";
                  echo "<td>" . $result['NumAta'] . "</td>";
                  echo "<td>" . $result['NumSeiAta'] . "</td>";
                  echo "<td>" . $result['IRPata'] . "</td>";
                  echo "<td>" . date('d/m/Y', strtotime($result['ValidadeAta'])) . "</td>";
                  echo "<td>" . $result['DescricaoAta'] . "</td>";
                  echo "<td>" . $result['LinkAta'] . "</td>";
                  echo "<td><button type='submit' formaction='../Home/EdicaoAtas.php' class='btn btn-primary'>Editar</button></td>";
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