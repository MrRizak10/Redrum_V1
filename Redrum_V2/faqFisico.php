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

				<!--Start Dashboard Content-->
				<div class="row">
					<div class="col-12 col-lg-12">
						<div class="card">
							<div class="card-header"><h2>Perguntas Frequentes (FAQ)</h2>
							</div>
							<div class="table-responsive">
								<section>
									<details>
										<summary><b>Quem pode doar?</b></summary>
										<p>Qualquer pessoa com idade entre 16 e 69 anos que pese mais de 50 quilos. Jovens de 16 ou 17 anos precisam de autorização dos pais ou responsáveis.</p><br>
									</details>
									<details>
										<summary><b>Quanto tempo demora?</b></summary>
										<p>A coleta do sangue é bem rápida: leva de 8 a 12 minutos. Antes, o doador faz uma triagem e passa algumas informações de saúde para os funcionários do local. Todo o processo leva em média 40 minutos.</p><br>
									</details>
									<details>
										<summary><b>O procedimento oferece algum perigo?</b></summary>
										<p>Não. A doação é totalmente segura e não apresenta nenhum risco. Os materiais utilizados, como a agulha e os cateteres, são descartáveis.</p><br>
									</details>
									<details>
										<summary><b>Quanto sangue é retirado?</b></summary>
										<p>Em média, são coletados 450 mililitros. Esse volume pode salvar a vida de até quatro pessoas.</p><br>
									</details>
									<details>
										<summary><b>Mas meu corpo não vai sentir falta desse sangue?</b></summary>
										<p>Não. Nós possuímos cerca de 5 litros do líquido vermelho circulando pelos vasos. A retirada não prejudica em nada: o organismo repõe e alcança os níveis normais em até 72 horas.</p><br>
									</details>
									<details>
										<summary><b>Existem algumas doenças que impedem a doação de sangue?</b></summary>
										<p>Sim. Doenças infecciosas, como a gripe, e inflamatórias, como aquelas que atacam o intestino, exigem que a doação seja postergada para outra data. Em caso de dúvida, converse com o profissional de saúde do hemocentro para saber se tudo está ok.</p><br>
									</details>
									<details>
										<summary><b>E o que eu preciso levar no dia da doação?</b></summary>
										<p>Apenas um documento original com foto.</p><br>
									</details>
									<details>
										<summary><b>Posso doar apresentando cópia de documentos?</b></summary>
										<p>Não. A Legislação exige que seja apresentado um documento oficial com foto. Essa medida é muito importante para identificar você corretamente e evitar erros na emissão dos seus resultados de exames.</p><br>
									</details>
									<details>
										<summary><b>Posso apresentar CNH digital para doar sangue?</b></summary>
										<p>Sim. O Hemocentro está preparado para fazer a sua identificação.</p><br>
									</details>
									<details>
										<summary><b>Eu fiz uma cirurgia recentemente. Posso doar sangue?</b></summary>
										<p>Você deve esperar 72 horas para doar sangue após uma extração dentária. Operações simples, como apendicite e retirada de varizes, pedem 3 meses. Procedimentos mais complexos, como a remoção da tireoide ou de um rim, meio ano. Caso você tenha passado por uma transfusão de sangue ou fez uma tatuagem, é importante aguardar por um ano.</p><br>
									</details>
									<details>
										<summary><b>E quanto tempo eu tenho que esperar entre uma doação e outra?</b></summary>
										<p>Os homens podem visitar o banco de sangue a cada 60 dias. Já as mulheres devem aguardar três meses.</p><br>
									</details>
									<details>
										<summary><b>Qual o limite de doações de sangue?</b></summary>
										<p>Podem ser realizadas até 04 doações de sangue por ano para homens e 03 doações por ano para mulheres.</p><br>
									</details>
									<details>
										<summary><b>E depois de doar sangue? Devo seguir alguma recomendação médica?</b></summary>
										<p>Sim. Evite esforços físicos, beba bastante água, não fume por duas horas e evite ingerir álcool pelo resto do dia. Também é importante não praticar esportes radicais, como paraquedismo ou mergulho, ou dirigir veículos de grande porte.</p><br>
									</details>
									<details>
										<summary><b>Posso ingerir bebidas alcoólicas antes da doação?</b></summary>
										<p>A ingestão de álcool na dose máxima de 40g impede a doação por um prazo de 12 horas. Consumo em dose superior impedirá a doação por 24h.</p><br>
									</details>
									<details>
										<summary><b>Posso aproveitar a doação de sangue e fazer meu cadastro para doar medula óssea?</b></summary>
										<p>Sim. É possível aproveitar a coleta de sangue e realizar o cadastro para doar medula óssea. Porém, é muito importante atualizar os dados no Hemocentro em caso de mudança de endereço e telefone pois precisaremos localizá-lo caso haja algum paciente compatível.</p><br>
									</details>
									<details>
										<summary><b>Qual o período de inaptidão para pessoas que tiveram contato com pacientes infectados ou com suspeita de covid-19?</b></summary>
										<p>O impedimento para doação de sangue é de 7 dias após o último contato.</p><br>
									</details>
									<details>
										<summary><b>Quem teve diagnóstico positivo mas sem sintomas precisa aguardar quanto tempo para voltar a doar sangue?</b></summary>
										<p>O voluntário poderá fazer a doação 10 dias após a data da coleta do exame.</p><br>
									</details>
								</section>
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
