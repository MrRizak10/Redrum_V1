<?php
	include_once "sessao.php";

	// recebe parametro
	$nome = strtoupper($_POST['nome']);
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$tipo = $_POST['tipo'];
	$termos = ($_POST['termos']=='S'?'S':'N');
	
	// monta QUERY
	$sql = "INSERT INTO usuarios (Nome,Email,Senha,idTipo,idMunicipio,flAceita) ".
			"VALUES ('$nome','$email','$senha','$tipo',1,'$termos')";
	echo $sql;
/*	$result = mysqli_query($conn, $sql);

	if (! $result)
	{?>
		<script>alert("Erro ao cadastrar o usuário!");</script>
	<?php
	}
	else
	{?>
		<script>alert("Usuário cadastado com sucesso!");</script>
	<?php
	}
*/
	// desconecta do banco
	mysqli_close($conn);
//	header("Location: index.html");
?>