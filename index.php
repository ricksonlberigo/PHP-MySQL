<?php require_once __DIR__ . '/./src/Controller/ListAllController.php'; ?>
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Fav Icon -->
  <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">

  <title>Funcionários Cadastrados</title>
</head>

<body>
  <div class="jumbotron bg-dark py-5">
    <h1 class="text-center text-light">Funcionários Cadastrados na Empresa</h1>
  </div>

  <div class="container py-5">
    <div class="container-fluid">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Cargo</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($funcionarios as $funcionario) : ?>
            <tr>
              <th><?= $funcionario['id']; ?></th>
              <td><?= $funcionario['nome']; ?></td>
              <td><?= $funcionario['email']; ?></td>
              <td><?= $funcionario['cargo']; ?></td>
              <td>
                <a href="./admin/edit.php?id=<?= $funcionario['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
                <a href="./admin/delete.php?id=<?= $funcionario['id']; ?>" class="btn btn-sm btn-danger">Excluir</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <a href="./admin/create.php" class="btn btn-primary">Adicionar Novo Funcionário</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>