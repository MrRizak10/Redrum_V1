<?php
	include_once "sessao.php";

	// recebe parametro
	$codigo = $_POST['codigo'];
	$hemocentro = $_POST['hemocentro'];
	$data = $_POST['data'];
	$hora = $_POST['hora'];
	$idDoador = $_POST['idDoador'];
	
	// monta QUERY
	$sql = "UPDATE agendamentos SET ".
				"dtAgendamento='$data', ".
				"hrAgendamento='$hora', ".
				"idHemocentro=$hemocentro, ".
				"idDoador=$idDoador ".
			"WHERE idAgendamento=$codigo";
	$result = mysqli_query($conn, $sql);

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

	// desconecta do banco
	mysqli_close($conn);
	header("Location: agendamentos.php");
?>