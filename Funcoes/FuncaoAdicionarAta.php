<?php

  include_once('../Funcoes/Verifica.php');
  include_once('../conn/db.php');

  $numAta = $_POST['numAta'];
  $numSeiAta = $_POST['numSeiAta'];
  $IRPata = $_POST['IRPata'];
  $validadeAta = $_POST['validadeAta'];
  $descricaoAta = $_POST['descricaoAta'];
  $linkAta = $_POST['linkAta'];
  date_default_timezone_set('America/Sao_Paulo');
  $DataCadastro = date('Y-m-d H:i:s');

  $stmt = mysqli_prepare($link, "INSERT INTO Atas(NumAta, NumSeiAta, IRPata, ValidadeAta, DescricaoAta, DataCadastroAta, LinkAta) VALUES(?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, 'sssssss', $numAta, $numSeiAta, $IRPata, $validadeAta, $descricaoAta, $DataCadastro, $linkAta);

  if(mysqli_stmt_execute($stmt)){
  echo
  "<script>
      alert('Ata inserida com sucesso!');
      window.location.href = '../Home/AdicionarAtas.php';
  </script>";
  }
  else{
  echo
    "<script>
      alert('Erro na consulta: . mysqli_error($link)');
    </script>";
  }

  mysqli_stmt_close($stmt);

?>