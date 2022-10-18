<?php
	// conexão
	include_once "conexao.php";

	$conn = mysqli_connect($localhost, $user, $password, $banco);

	if (!$conn)
	{
		echo  "<script>alert('Não foi possível conectar ao Banco de Dados. Usuário ou Senha inválidos!');</script>";
		header('Location: index.html');
	}

	// recebe as informações
	$user = $_POST['usuario'];
	$password = $_POST['senha'];

	$sql =  "SELECT * FROM usuarios ".
			"WHERE (Email='$user') AND ".
			"(Senha='$password')";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);

	if ($row > 0)
	{
		// cria sessão
		session_start();
		$_SESSION['usuario'] = $user;
		$_SESSION['senha'] = $password;
		$_SESSION["email"] = $row[2];
		header('Location: index.php');
	}
	else
	{
		// volta para a tela de login
		header('Location: index.html');
	}
?>