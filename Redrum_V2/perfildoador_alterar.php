<?php
	include_once "sessao.php";

	// recebe parametro
	$codigo = $_POST['codigo'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$municipio = $_POST['municipio'];
	$email = $_POST['email'];
	$idTipo = $_POST['idTipo'];
	$cpf = ($idTipo=='D'?$_POST['cpf']:'');
	$cnpj = ($idTipo<>'D'?$_POST['cnpj']:'');
	$telefone = $_POST['telefone'];
	$tpsangue = ($idTipo=='D'?$_POST['tpsangue']:'');
	$fator = ($idTipo=='D'?$_POST['fator']:'');
	$senha = $_POST['senha'];
	$aceita = ($_POST['aceita']='S'?'S':'N');
	$atendimento = ($idTipo=='H'?$_POST['atendimento']:'');
	
	// monta QUERY
	$sql = "UPDATE usuarios SET ".
			"Nome='$nome',".
			"Email='$email',".
			"Senha='$senha',".
			"Telefone='$telefone',".
			"idTipo='$idTipo',".
			"dsEndereco='$endereco',".
			"dsComplemento='$complemento',".
			"nrCep='$cep',".
			"dsBairro='$bairro',".
			"idMunicipio=$municipio,".
			"nrCpf='$cpf',".
			"nrCnpj='$cnpj',".
			"tpSangue='$tpsangue',".
			"flFator='$fator',".
			"flAceita='$aceita',".
			"dsAtendimento='$atendimento' ".
			"WHERE idUsuario=$codigo";
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
	header("Location: index.php");
?>