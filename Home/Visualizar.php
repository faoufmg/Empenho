<?php
  include_once('../global.php');
  include_once('../Home/header.php');
  include_once('../conn/db.php');
?>

<section class="principal bg-color-cinza" height="100%">
  <div class="container-fluid">

  <figure class="text-center mt-3">
      <h1>Visualizar</h1>
    </figure>

    <div class="row">
      <div class="col">
        <div class="row">

          <div class="col-md-12 col-lg-12">
            <div class="box align-middle">
              <img src="../Imagens/checkbox-unchecked-svgrepo-com.svg" width="65px" height="65px" alt="Visualizar Empenhos em Aberto">
              <!-- <p class="acoes text-center align-middle"><span class="font-weight-bold">Processos</span> SEI</p> -->
              <div class="col text-center mt-3">
                <a type="button" class="btn btn-primary" style="background-color: #831D1C" href="../Home/VisualizarAbertos.php">Visualizar Empenhos em Aberto</a>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-12">
            <div class="box align-middle">
              <img src="../Imagens/checkbox-check-svgrepo-com.svg" width="65px" height="65px" alt="Visualizar Empenhos Concluídos">
              <!-- <p class="acoes text-center align-middle"><span class="font-weight-bold">Processos</span> SEI</p> -->
              <div class="col text-center mt-3">
                <a type="button" class="btn btn-primary" style="background-color: #831D1C" href="../Home/VisualizarConcluidos.php">Visualizar Empenhos Concluídos</a>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-12">
            <div class="box align-middle">
              <img src="../Imagens/documents-svgrepo-com.svg" width="65px" height="65px" alt="Visualizar Atas">
              <!-- <p class="acoes text-center align-middle"><span class="font-weight-bold">Processos</span> SEI</p> -->
              <div class="col text-center mt-3">
                <a type="button" class="btn btn-primary" style="background-color: #831D1C" href="../Home/VisualizarAtas.php">Visualizar Atas</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="col text-center mt-3">
    <a class="btn btn-secondary" href="../index.php">Voltar</a>
  </div>
  
</section>    

<?php
  include_once('../Home/footer.php');
?>