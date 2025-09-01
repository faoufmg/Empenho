<?php

include_once('../conn/db.php');

// Verifique se as variáveis $_POST estão definidas
if (isset($_POST['AtasID'], $_POST['NumAtaEditado'], $_POST['numSeiAtaEditado'], $_POST['IRPataEditado'], $_POST['validadeAtaEditada'], $_POST['descricaoAtaEditada'], $_POST['linkAtaEditada'])) {
    $AtasID = $_POST['AtasID'];
    $NumAtaEditado = $_POST['NumAtaEditado'];
    $numSeiAtaEditado = $_POST['numSeiAtaEditado'];
    $IRPataEditado = $_POST['IRPataEditado'];
    $validadeAtaEditada = $_POST['validadeAtaEditada'];
    $descricaoAtaEditada = $_POST['descricaoAtaEditada'];
    $linkAtaEditada = $_POST['linkAtaEditada'];

    // Use prepared statements para evitar injeção de SQL
    $sql = "UPDATE Atas SET NumAta = ?, NumSeiAta = ?, IRPata = ?, ValidadeAta = ?, DescricaoAta = ?, LinkAta = ? WHERE Atas_id = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssi", $NumAtaEditado, $numSeiAtaEditado, $IRPataEditado, $validadeAtaEditada, $descricaoAtaEditada, $linkAtaEditada, $AtasID);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo
        "<script>
            alert('Ata editada com sucesso!');
            window.location.href = '../Home/EditarAtas.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Erro ao editar a ata!');
            window.location.href = '../Home/EditarAtas.php';
        </script>";
    }
} else {
    echo "Algumas variáveis $_POST estão faltando.";
}

?>