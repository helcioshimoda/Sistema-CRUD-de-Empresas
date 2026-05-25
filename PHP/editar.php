<?php

include 'connect.php';

$id = (int) $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM empresas WHERE id = ?");

$stmt->bind_param("i",$id);

$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <div class="container mt-5 p-4">
        <h1 class="text-center">Editar Chamado</h1>
        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo (int)$row['id'];?>">
            <div class="mb-3">
                <h3 class="fw-bold">Nome</h3>
                <input type="text" name="nome" class="form-control" value="<?php echo htmlspecialchars($row['nome']); ?>">
            </div>
            <div class="mb-3">
                <h3 class="fw-bold">Email</h3>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($row['email']); ?>">
            </div>
            <div class="mb-3">
                <h3 class="fw-bold">Setor</h3>
                <input type="text" name="setor" class="form-control" value="<?php echo htmlspecialchars($row['setor']); ?>">
            </div>
            <div class="mb-3">
                <h3 class="fw-bold">Telefone</h3>
                <input type="tel" name="telefone" class="form-control" value="<?php echo htmlspecialchars($row['telefone']); ?>">
            </div>
            <div class="mb-3">
                <h3 class="fw-bold">Status</h3>
                    <select name="status" class="form-select">
                    <option value="Funcionando"<?php if($row['status'] == 'Funcionando') echo 'selected'; ?>>Funcionando</option>
                    <option value="Temporariamente fechada"<?php if($row['status'] == 'Temporariamente fechada') echo 'selected'; ?>>Temporariamente fechada</option>
                    <option value="Fechada"<?php if($row['status'] == 'Fechada') echo 'selected'; ?>>Fechada</option>
                </select>
            </div>
            <div class="mb-3">
                <h3 class="fw-bold">Data de Fundação</h3>
                <input type="date" name="data_de_fundacao" class="form-control" value="<?php echo htmlspecialchars($row['data_de_fundacao']); ?>">
            </div>
            <input type="submit" value="Atualizar" class="btn btn-success">
        </form>

    </div>
    
</body>
</html>