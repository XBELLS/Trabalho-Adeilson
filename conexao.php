<?php 
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "minimundo";

	$conexaobd = mysqli_connect($servidor, $usuario, $senha, $bd);
	if (!$conexaobd) {
		echo "Não conectou com o Banco de Dados";
	}else{
		//echo "Conectado!!";
	}
?>