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
		$sql = "SELECT u.Nome,u.Email,u.Telefone,u.dsEndereco,u.dsComplemento,".
				"u.nrCep,u.dsBairro,m.dsMunicipio,m.dsUf,u.dsAtendimento ".
				"FROM usuarios u, municipios m ".
				"WHERE (u.idUsuario=$codigo) AND (u.idMunicipio=m.idMunicipio)";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
		{
			$Nome = $row[0];
			$Email = $row[1];
			$Telefone = $row[2];
			$dsEndereco = $row[3];
			$dsComplemento = $row[4];
			$nrCep = $row[5];
			$dsBairro = $row[6];
			$dsMunicipio = $row[7];
			$dsUf = $row[8];
			$dsAtendimento = $row[9];

			$lugar = $dsEndereco.", ".$dsBairro." - ".$dsMunicipio."-".$dsUf;
			$maps = "https://www.google.com.br/maps?q=".$lugar."&t=&z=16&ie=UTF8&iwloc=&output=embed";
		}?>

		<div class="clearfix"></div>

		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row mt-3">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="card-title"><h3>Hemocentro</h3></div>
								<div class="table-responsive">
									<table class="table align-items-center table-flush table-borderless">
										<tbody>
											<tr>
												<td>Nome do Hemocentro</td>
												<td><?php echo $Nome;?></td>
											</tr>
											<tr>
												<td>E-mail</td>
												<td><?php echo $Email;?></td>
											</tr>
											<tr>
												<td>Telefone</td>
												<td><?php echo $Telefone;?></td>
											</tr>
											<tr>
												<td>Endereço</td>
												<td><?php echo $dsEndereco."  ".$dsComplemento."<br>".$dsBairro."<br>".$nrCep." - ".$dsMunicipio." - ".$dsUf;?></td>
											</tr>
											<tr>
												<td>Atendimento</td>
												<td><?php echo $dsAtendimento;?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="card-title"><h3>Localização</h3></div>
									<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 0.1em">
										<iframe src="<?php echo $maps;?>" frameborder="2" style="border:3" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="button" class="btn btn-light px-5" value="Voltar" onClick="history.go(-1)">
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
