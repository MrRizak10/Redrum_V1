<?php
	// conex�o
	include_once "conexao.php";

	$conn = mysqli_connect($localhost, $user, $password, $banco);

	if (!$conn)
	{
		echo  "<script>alert('N�o foi poss�vel conectar ao Banco de Dados!');</script>";
		header('Location: logout.php');
	}			

	// abre sess�o
	session_start();
	if ((!isset($_SESSION["usuario"])) || (!isset($_SESSION["senha"])))
	{
		header("Location: index.html");
	}
	else
	{
		$usuario = $_SESSION["usuario"];
		$senha = $_SESSION["senha"];
		$email = $_SESSION["email"];
	}
?>