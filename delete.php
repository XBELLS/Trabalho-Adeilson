<?php
include 'conexao.php';
$id = $_GET["id"];

if (isset($_GET['id'])) {
    $sqldelete = mysqli_query($conexaobd, "DELETE FROM usuario WHERE id = {$id}")
    or die (mysqli_error($conexaobd));

    header('location: list.php');
}
?>