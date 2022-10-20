<?php
	include_once "sessao.php";

	// recebe parametro
	$hemocentro = $_POST['hemocentro'];
	$data = $_POST['data'];
	$hora = $_POST['hora'];
	$idDoador = $_POST['iddoador'];
	
	// monta QUERY
	$sql = "INSERT INTO agendamentos (dtAgendamento,hrAgendamento,idHemocentro,idDoador) ".
			"VALUES ('$data','$hora',$hemocentro,$idDoador)";
	$result = mysqli_query($conn, $sql);

	if (! $result)
	{?>
		<script>alert("Erro ao cadastrar o agendamento!");</script>
	<?php
	}
	else
	{?>
		<script>alert("Agendamento cadastado com sucesso!");</script>
	<?php
	}

	// desconecta do banco
	mysqli_close($conn);
	header("Location: agendamentos.php");
?>