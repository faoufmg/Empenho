<?php

include_once('../conn/db.php');

// Verifique se as variáveis ​​$_POST estão definidas
if (isset($_POST['EmpenhoID'], $_POST['IRPempenhoeditado'], $_POST['empenhoEditado'], $_POST['processoSEIEditado'], $_POST['valorNotaEditado'], $_POST['dataReciboEditada'], $_POST['prevEnvioEditada'], $_POST['statusEditado'], $_POST['fornecedorEditado'], $_POST['nomeContatoEditado'], $_POST['telContatoEditado'], $_POST['situacaoEditada'], $_POST['observacaoEditada'], $_POST['linkEmpenhoEditado'], $_POST['especificacaoEmpenhoEditada'])) {
    $EmpenhoID = $_POST['EmpenhoID'];
    $IRPempenhoeditado = $_POST['IRPempenhoeditado'];
    $empenhoEditado = $_POST['empenhoEditado'];
    $processoSEIEditado = $_POST['processoSEIEditado'];
    $valorNotaEditado = $_POST['valorNotaEditado'];
    $dataReciboEditada = $_POST['dataReciboEditada'];
    $prevEnvioEditada = $_POST['prevEnvioEditada'];
    $statusEditado = $_POST['statusEditado'];
    $fornecedorEditado = $_POST['fornecedorEditado'];
    $nomeContatoEditado = $_POST['nomeContatoEditado'];
    $telContatoEditado = $_POST['telContatoEditado'];
    $situacaoEditada = $_POST['situacaoEditada'];
    $observacaoEditada = $_POST['observacaoEditada'];
    $linkEmpenhoEditado = $_POST['linkEmpenhoEditado'];
    $especificacaoEmpenhoEditada = $_POST['especificacaoEmpenhoEditada'];

    // Use prepared statements para evitar injeção de SQL
    $sql = "UPDATE Empenho SET IRPempenho = ?, Empenho = ?, ProcessoSEI = ?, ValorNota = ?, DataRecibo = ?, PrevEnvio = ?, Status = ?, Fornecedor = ?, NomeContato = ?, TelContato = ?, Situacao = ?, Observacao = ?, LinkEmpenho = ?, EspecificacaoEmpenho = ? WHERE Empenho_id = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssssssssssi", $IRPempenhoeditado, $empenhoEditado, $processoSEIEditado, $valorNotaEditado, $dataReciboEditada, $prevEnvioEditada, $statusEditado, $fornecedorEditado, $nomeContatoEditado, $telContatoEditado, $situacaoEditada, $observacaoEditada, $linkEmpenhoEditado, $EmpenhoID, $especificacaoEmpenhoEditada);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo
        "<script>
            alert('Empenho editado com sucesso!');
            window.location.href = '../Home/EditarEmpenho.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Erro ao editar o empenho!');
            window.location.href = '../Home/EditarEmpenho.php';
        </script>";
    }
} else {
    echo "Algumas variáveis ​​$_POST estão faltando.";
}

?>