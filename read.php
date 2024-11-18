<?php
include 'conexao.php';
$listarSQL = mysqli_query($conexaobd, "SELECT * FROM usuario");
?>