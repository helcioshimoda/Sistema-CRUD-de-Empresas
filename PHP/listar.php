<?php

include 'connect.php';

$sql = "SELECT * FROM  empresas";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <div class="container m-5 p-4">
        <h1 class="text-center fw-bold">Lista de Empresas</h1>
        <hr>
        <br>
        <?php
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                echo "ID: " . (int)$row['id'] . "<br>";
                echo "Nome: " . htmlspecialchars($row['nome']) . "<br>";
                echo "Email: " . htmlspecialchars($row['email']) . "<br>";
                echo "Setor: " . htmlspecialchars($row['setor']) . "<br>";
                echo "Telefone: " . htmlspecialchars($row['telefone']) . "<br>";
                echo "Status: " . htmlspecialchars($row['status']) . "<br>";
                echo "Data de Fundação: " . htmlspecialchars($row['data_de_fundacao']) . "<br>";
                echo "<a class='btn btn-warning btn-sm' href='editar.php?id=".$row['id']."'>Editar</a>";
                echo " ";
                echo "<a class='btn btn-danger btn-sm' href='excluir.php?id=".$row['id']."' onclick=\"return confirm('Deseja excluir?')\">Excluir</a>";
                echo "<hr>";
            }
        }
        $conn->close();
        ?>
        <br>
        <a href="index.php" class="btn btn-primary">Novo Chamado</a>
    </div>
    
</body>
</html>