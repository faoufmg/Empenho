<?php

  include_once('../Funcoes/Verifica.php');
  include_once('../conn/db.php');

  $IRPempenho = $_POST['IRPempenho'];
  $Empenho = $_POST['empenho'];
  $ProcessoSEI = $_POST['processoSEI'];
  $ValorNota = $_POST['valorNota'];
  $DataRecibo = $_POST['dataRecibo'];
  $PrevEnvio = $_POST['prevEnvio'];
  $Status = $_POST['status'];
  $Fornecedor = $_POST['fornecedor'];
  $NomeContato = $_POST['nomeContato'];
  $TelContato = $_POST['telContato'];
  $Situacao = $_POST['situacao'];
  $Observacao = $_POST['observacao'];
  $LinkEmpenho = $_POST['linkEmpenho'];
  $EspecificacaoEmpenho = $_POST['especificacaoEmpenho'];
  date_default_timezone_set('America/Sao_Paulo');
  $DataCadastro = date('Y-m-d H:i:s');

  $stmt = mysqli_prepare($link, "INSERT INTO Empenho(IRPempenho, Empenho, ProcessoSEI, ValorNota, DataRecibo, PrevEnvio, Status, Fornecedor, NomeContato, TelContato, Situacao, Observacao, DataCadastro, LinkEmpenho, EspecificacaoEmpenho) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, 'sssssssssssssss', $IRPempenho, $Empenho, $ProcessoSEI, $ValorNota, $DataRecibo, $PrevEnvio, $Status, $Fornecedor, $NomeContato, $TelContato, $Situacao, $Observacao, $DataCadastro, $LinkEmpenho, $EspecificacaoEmpenho);

  if(mysqli_stmt_execute($stmt)){
  echo
  "<script>
      alert('Empenho inserido com sucesso!');
      window.location.href = '../Home/AdicionarEmpenho.php';
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