<?php
include_once "sessao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php
	include_once "header.php";
	?>
</head>

<body class="bg-theme bg-theme1">

	<!-- Start wrapper-->
	<div id="wrapper">
 
		<?php
		include_once "menu.php";

		include_once "topbar.php";
		
		$codigo = $_GET['c'];
		$sql = "SELECT a.dtAgendamento,a.hrAgendamento,a.idHemocentro,a.idDoador ".
				"FROM agendamentos a ".
				"WHERE (a.idAgendamento=$codigo)";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
		{
			$dtAgendamento = $row[0];
			$hrAgendamento = $row[1];
			$idHemocentro = $row[2];
			$idDoador = $row[3];
		}?>

		<div class="clearfix"></div>

		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row mt-6">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="card-title"><h3><?php echo ($idTipo=="D"?"Doador":($idTipo=="B"?"Banco de Sangue":"Hemocentro"));?></h3>* Campo Obrigatório</div>
								<hr>
								<form name="formulario" action="agendamentos_alterar.php" method="post">
									<div class="form-group">
										<label for="input-1">Hemocentro</label>
										<select class="form-control" name="hemocentro" required autofocus>
											<option value="" selected>Selecione...</option>
											<?php 
											// conexão
											$sql1 = "SELECT idUsuario,Nome ".
													"FROM usuarios ".
													"WHERE (idTipo='H') ".
													"ORDER BY Nome";
											$resultado1 = mysqli_query($conn, $sql1);
											while ($linha1 = mysqli_fetch_array($resultado1, MYSQLI_NUM))
											{ ?>
												<option value="<?php echo $linha1[0];?>" <?=($idHemocentro==$linha1[0])?'selected':''?>><?php echo $linha1[1];?></option>
											<?php
											} ?>
										</select>
									</div>
									<div class="form-group">
										<label for="input-2">Data da Doação</label>
										<input type="date" class="form-control" name="data" value="<?php echo $dtAgendamento;?>" id="input-2" maxlength="10" placeholder="dd/mm/aaaa" required>
									</div>
									<div class="form-group">
										<label for="input-2">Horário da Doação</label>
										<input type="time" class="form-control" name="hora" value="<?php echo $hrAgendamento;?>" id="input-2" maxlength="5" placeholder="hh:mm" required>
									</div>
									<div class="form-group">
										<input type="hidden" name="codigo" value="<?php echo $codigo;?>">
										<input type="hidden" name="iddoador" value="<?php echo $idDoador;?>">
										<button type="submit" class="btn btn-light px-5"><i class="icon-check"></i> Salvar</button>
										<input type="button" class="btn btn-light px-5" value="Voltar" onClick="history.go(-1)">
									</div>
							  </form>
					 </div>
					 </div>
				  </div>
	  
				<!--start overlay-->
				<div class="overlay toggle-menu"></div>
				<!--end overlay-->
		
			</div>
			<!-- End container-fluid-->
    
		</div><!--End content-wrapper-->

		<!--Start Back To Top Button-->
		<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
		<!--End Back To Top Button-->
	
		<!--Start footer-->
		<footer class="footer">
			<div class="container">
				<div class="text-center">
					Copyright © 2022 Bruno Rizak Ferreira, Eduardo Cansan Stadtlober, Pedro De Lucca Viegas dos Santos & Fabian Viégas<br>
					Técnico em Análise e Desenvolvimento de Sistemas | Senac São Leopoldo
				</div>
			</div>
		</footer>
		<!--End footer-->
   
	</div><!--End wrapper-->

	<?php 
	// fecha conexão
	mysqli_close($conn);
	?>

	<!-- Bootstrap core JavaScript-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
	<!-- simplebar js -->
	<script src="assets/plugins/simplebar/js/simplebar.js"></script>

	<!-- sidebar-menu js -->
	<script src="assets/js/sidebar-menu.js"></script>

	<!-- loader scripts -->
	<script src="assets/js/jquery.loading-indicator.js"></script>

	<!-- Custom scripts -->
	<script src="assets/js/app-script.js"></script>

	<!-- Chart js -->
	
	<script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
	<!-- Index js -->
	<script src="assets/js/index.js"></script>
 
</body>
</html>
