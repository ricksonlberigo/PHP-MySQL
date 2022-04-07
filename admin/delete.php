<?php require_once __DIR__ . '/../src/Controller/FindByIDController.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="../assets/img/favicon.svg" type="image/x-icon">

    <title>Excluir Funcionário</title>
</head>

<body>
    <div class="jumbotron bg-dark py-5">
        <h1 class="text-center text-light">Excluir Funcionário</h1>
    </div>

    <div class="container py-5">
        <div class="container-fluid">
            <form method="POST" action="../src/Controller/DeleteController.php">
                <h3>Tem certeza que deseja excluir o funcionário</h3>
                <input type="hidden" name="id" value="<?= $func['id']; ?>">
                <button type="submit" class="btn btn-danger">Excluir</button>
                <a href="../index.php" class="btn btn-secondary">Voltar</a>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>