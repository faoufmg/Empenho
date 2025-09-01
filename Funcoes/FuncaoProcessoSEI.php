<?php
  include_once('../conn/db.php');

  $selectedMaterial = $_POST['material'];

  $sql = "SELECT NumSeiAta FROM Atas WHERE IRPata = ?";
  $stmt = $link->prepare($sql);
  $stmt->bind_param('s', $selectedMaterial);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['NumSeiAta'];
  } 

  $stmt->close();
  $link->close();
?>
