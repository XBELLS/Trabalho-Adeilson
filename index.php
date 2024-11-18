<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro - PHP </title>
</head>
<body>
    <div class="container col-md-6 offset-md-3">
        <h2>Formulário de usuário - PHP com MYSQL</h2>
        <form action="salvar.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" name="nome" id=""> <br>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" id=""> <br>
                </div>
            </div>
             <button type="submit" class="btn btn-secondary">Salvar</button>
        </form>
    </div>
    <?php include 'list.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>