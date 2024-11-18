<?php 
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Usando prepared statement para evitar SQL Injection
    $stmt = $conexaobd->prepare("SELECT * FROM usuario WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $sql = $stmt->get_result();
    
    $count = mysqli_num_rows($sql);
    if ($count > 0) {
        $n = mysqli_fetch_assoc($sql);
        $nome = $n['nome'];
        $sobrenome = $n['sobrenome'];
    } else {
        $nome = $sobrenome = ''; // Evita erro se não houver dados
    }
}

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    
    // Usando prepared statement para atualização
    $stmt = $conexaobd->prepare("UPDATE usuario SET nome = ?, sobrenome = ?  WHERE id = ?");
    $stmt->bind_param("ssdi", $nome, $sobrenome, $id);
    $stmt->execute();

    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - PHP</title>
</head>
<body>
    <h1>Atualização do Cadastro - PHP com MYSQL</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="nome" placeholder="Nome" value="<?php echo htmlspecialchars($nome); ?>"> <br>
        <input type="text" name="sobrenome" placeholder="Sobrenome" value="<?php echo htmlspecialchars($sobrenome); ?>"> <br>
        <button name="editar" type="submit">Salvar</button>
    </form>
</body>
</html>