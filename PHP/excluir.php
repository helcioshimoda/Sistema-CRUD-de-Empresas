<?php

include 'connect.php';

$id = (int) $_GET['id'];

$stmt = $conn->prepare("DELETE FROM empresas WHERE id = ?");

$stmt->bind_param("i", $id);

if($stmt->execute()){
    header('Location: listar.php');
    exit();
}else{
    echo "Erro ao excluir: ". $stmt->error;
}
$stmt->close();
$conn->close();
?>