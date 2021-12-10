<?php
	include 'conexao.php'; // conectando-se ao banco de dados

	$name = $_POST['name'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	// executando o comando sql (inserindo dados na tabela)
	$sql = mysqli_query($conexao, "INSERT INTO usuario (name, email, senha) VALUES ('$name','$email', '$senha')");

	header('Location: login.html');
?>

