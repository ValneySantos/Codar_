<?php
	include 'conexao.php'; // conectando-se ao banco de dados

	// recebendo os dados do formulário
	$email = $_POST['email'];

	// executando o comando sql (pesquisando dados na tabela)
	$sql = mysqli_query($conexao, "select * from usuario where email = '$email'");

	$row = mysqli_num_rows($sql);// quantidade de registros retornados na consulta 

	if($row > 0){
		echo "Usuario encontrado!";
	}else{
		echo "Usuario não encontrado!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><br>
	<a href="busca.php">Voltar</a>
</body>
</html>