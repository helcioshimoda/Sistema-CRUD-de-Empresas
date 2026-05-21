<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <div class="container container-menu mt-5 p-4">
            <h1 class="text-center fw-bold">Cadastro de Empresas</h1>
        <form>
            <div class="mb-3">
                <label class="fw-bold">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Digite o nome da empresa">
            </div>
            <div class="mb-3">
                <label class="fw-bold">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Digite o email da empresa">
            </div>
            <div class="mb-3">
                <label class="fw-bold">Setor</label>
                <input type="text" name="setor" class="form-control" placeholder="Digite o setor da empresa">
            </div>
            <div class="mb-3">
                <label class="fw-bold">Telefone</label>
                <input type="tel" name="telefone" class="form-control" placeholder="Digite o telefone da empresa">
            </div>
            <div class="mb-3">
                <label class="fw-bold">Status</label>
                <select name="status" class="form-select">
                    <option value="funcionado">Funcionando</option>
                    <option value="temporariamente-fechada">Temporariamente fechada</option>
                    <option value="fechada">Fechada</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Data de Fundação</label>
                <input type="date" name="data-de-fundacao" class="form-control">
            </div>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>