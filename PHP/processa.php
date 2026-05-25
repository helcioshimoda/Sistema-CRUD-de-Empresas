<?php

include 'connect.php';

if( isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['setor']) &&isset($_POST['telefone']) &&isset($_POST['status']) &&isset($_POST['data_de_fundacao'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $setor = $_POST['setor'];
    $telefone = $_POST['telefone'];
    $status = $_POST['status'];
    $data_de_fundacao = $_POST['data_de_fundacao'];

    $stmt = $conn->prepare(
        "INSERT INTO empresas
        (nome, email, setor, telefone, status, data_de_fundacao)
        VALUES (?, ?, ?, ?, ?, ?)"
    );
 
    $stmt->bind_param(
        "ssssss",
        $nome,
        $email,
        $setor,
        $telefone,
        $status,
        $data_de_fundacao
    );

    if($stmt->execute()){
        header('Location: listar.php');
        exit();
    }else{
        echo "Erro: " . $stmt-> error;
    }
    
    $stmt->close();
    $conn->close();

}

?>