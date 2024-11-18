<?php 
//conectando com os bancos
include 'read.php';
include 'conexao.php';
include 'update.php';
include 'salvar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabela de dados</title>
</head>
<body>
    <br><br><br>
    <div class="container col-md-6 offset-md-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>
            <?php while($usuario = mysqli_fetch_assoc($listarSQL)){ ?>
            <tbody>
                <tr>
                    <td> <?php echo $usuario['id'] ?> </td>
                    <td> <?php echo $usuario['nome'] ?> </td>
                    <td> <?php echo $usuario['sobrenome'] ?> </td>
                    <td>
                        <a href="delete.php?id=<?php echo $usuario['id'];?>" class="btn btn-sm btn-info">Excluir</a>
                        <a href="update.php?id=<?php echo $usuario['id'];?>" class="btn btn-sm btn-secondary">Atualizar</a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <a href="index.php" class="btn btn-sm btn-secondary">Página Inicial</a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>