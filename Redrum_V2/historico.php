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
 
		<!--Start sidebar-wrapper-->
		<?php
		include_once "menu.php";
		?>
		<!--End sidebar-wrapper-->

		<!--Start topbar header-->
		<?php
		include_once "topbar.php";
		?>
		<!--End topbar header-->

		<div class="clearfix"></div>

		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-lg-12">
						<div class="card">
							<div class="card-header"><h3>Histórico</h3></div>
							<div class="table-responsive">
								<table class="table align-items-center table-flush table-borderless">
									<thead>
										<tr>
											<th width="10%">Doou em</th>
											<th width="40%">Local da Doação</th>
											<th width="40%">Observação do Local da Doação</th>
											<th width="10%">Status</th>
										</tr>
									</thead>
									<tbody>
									<?php 
									$sql = "SELECT DATE_FORMAT(h.dtDoacao,'%d/%m/%Y'),u.Nome,h.dsObservacoes,s.dsStatus ".
											"FROM historicos h, usuarios u, Status s ".
											"WHERE (h.idUsuario=$codigo) and (h.idLocal=u.idUsuario) and (h.idStatus=s.idStatus)";
									// conexão
									$result = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
									{ ?>
										<tr>
											<td><?php echo $row[0];?></td>
											<td><?php echo $row[1];?></td>
											<td><?php echo $row[2];?></td>
											<td><?php echo $row[3];?></td>
										</tr>
									<?php
									} ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--End Row-->

				<!--End Dashboard Content-->
	  
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
