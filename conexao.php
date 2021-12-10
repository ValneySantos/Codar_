<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";
	$conexao = mysqli_connect($host, $user, $pass); // aqui eu me conecto ao mysql
	mysqli_select_db($conexao, $banco); // aqui eu seleciono a base de dados
?>