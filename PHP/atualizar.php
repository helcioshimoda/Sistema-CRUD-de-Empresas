<?php
include 'connect.php';

if(isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['setor']) &&isset($_POST['telefone']) &&isset($_POST['status']) &&isset($_POST['data_de_fundacao'])){
    $id = (int) $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $setor = $_POST['setor'];
    $telefone = $_POST['telefone'];
    $status = $_POST['status'];
    $data_de_fundacao = $_POST['data_de_fundacao'];

    $stmt = $conn->prepare(
        "UPDATE empresas SET
        nome = ?,
        email = ?,
        setor = ?,
        telefone = ?,
        status = ?,
        data_de_fundacao = ?
        
        WHERE id = ?"
    );
    $stmt->bind_param("ssssssi", $nome, $email, $setor, $telefone, $status, $data_de_fundacao, $id);

    if($stmt->execute()){
        header('Location: listar.php');
        exit();
    }else{
        echo"Erro ao atualizar: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>