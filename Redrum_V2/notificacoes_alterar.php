<?php
	include_once "sessao.php";

	// recebe parametro
	$codigo = $_GET['c'];
	
	// monta QUERY
	$sql = "UPDATE notificacoes SET ".
			"flStatus='S' ".
			"WHERE idNotificacao=$codigo";
	$result = mysqli_query($conn, $sql);

	if (! $result)
	{?>
		<script>alert("Erro ao alterar status da notificação!");</script>
	<?php
	}
	else
	{?>
		<script>alert("Status da notificação alterada com sucesso!");</script>
	<?php
	}

	// desconecta do banco
	mysqli_close($conn);
	header("Location: notificacoes.php");
?>