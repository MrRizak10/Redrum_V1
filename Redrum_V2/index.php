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
							<div class="card-header"><h3>Sobre o Projeto</h3>
								<div class="card-action">
								</div>
							</div>
							<div class="card-header">
								<br><br><p><b><h5>O objetivo desta aplicação é disponibilizar informações atualizadas sobre estoques de hemocentros no estado do Rio Grande do Sul, ampliando a conexão entre os hemocentros e os doadores, e estimulando o aumento de doações voluntárias.</h5></b></p>
								<br>
								<b><h5>Este projeto é parte integrante do Projeto Integrador do Curso Técnico em Análise e Desenvolvimento de Sistemas da Escola Senac de São Leopoldo, e foi desenvolvido por Bruno Rizak Ferreira, Eduardo Cansan Stadtlober e Pedro De Lucca Viegas dos Santos, sob orientação do prof. Fabian Viégas.</h5></b></p>
								<br><br>
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
