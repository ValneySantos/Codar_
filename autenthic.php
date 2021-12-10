<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script type="text/javascript">
        function loginsus(){
            setTimeout("window.location='busca.php'", 5000);
        }
        function loginfal(){
            setTimeout("window.location='login.html'", 4000);
        }
    </script>
</head>
<body>
    
</body>
</html>
<?php
	include 'conexao.php'; // conectando-se ao banco de dados

	// recebendo os dados do formulário
	$email = $_POST['email'];
	$senha = $_POST['senha'];

    $sqli = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'") or die(mysqli_error());
    $row = mysqli_num_rows($sqli);

    if($row > 0){
        session_start();
        $_SESSION['email']=$_POST['email'];
        $_SESSION['senha']=$_POST['senha'];
        echo "<center>Você foi logado com sucesso! Aguarde um instante.</center>";
        echo "<script>loginsus()</script>";
    }else{
        echo "<center>Email ou senha inválidos! Aguarde um instante para tentar novamente.</center>";
        echo "<script>loginfal()</script>";

    } 
?>