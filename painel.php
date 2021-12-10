<?php
	include 'conexao.php';

    session_start();
    if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
        header("Location: login.html");
        exit;
    } else{
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Sistema de Cadastro</title>
    <style>
        body{
            width: 70%;
            margin: 0 auto;
        }
        main{
            padding-top: 5vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>
    <main>
    <form method="post" action="buscando.php">
        Pesquisar emails de usuários no database: 
        <br><br>
        <input type="submit" value="Pesquisar">
    </form>
    <a href="logout.php">Terminar sessão</a>
    </main>
</body>

</html>