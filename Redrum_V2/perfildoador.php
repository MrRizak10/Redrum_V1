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
		?>

		<div class="clearfix"></div>

		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row mt-6">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<div class="card-title"><h3><?php echo ($idTipo=="D"?"Doador":($idTipo=="B"?"Banco de Sangue":"Hemocentro"));?></h3>* Campo Obrigatório</div>
								<hr>
								<form name="formulario" action="perfildoador_alterar.php" method="post">
									<div class="form-group">
										<label for="input-1">Nome *</label>
										<input type="text" class="form-control" name="nome" value="<?php echo $nomecompleto;?>" id="input-1" maxlength="75" placeholder="Entre seu nome" onblur="javascript:this.value=this.value.toUpperCase();" required autofocus>
									</div>
									<div class="form-group">
										<label for="input-2">Endereço *</label>
										<input type="text" class="form-control" name="endereco" value="<?php echo $dsEndereco;?>" id="input-2" maxlength="50" placeholder="Entre seu Endereço" onblur="javascript:this.value=this.value.toUpperCase();" required>
									</div>
									<div class="form-group">
										<label for="input-2">Complemento</label>
										<input type="text" class="form-control" name="complemento" value="<?php echo $dsComplemento;?>" id="input-2" maxlength="20" placeholder="Entre o Complemento">
									</div>
									<div class="form-group">
										<label for="input-2">Bairro</label>
										<input type="text" class="form-control" name="bairro" value="<?php echo $dsBairro;?>" maxlength="30" id="input-2" placeholder="Entre o Bairro">
									</div>
									<div class="form-group">
										<label for="input-2">CEP</label>
										<input type="text" class="form-control" name="cep" value="<?php echo $nrCep;?>" id="input-2" maxlength="9" placeholder="Entre o CEP">
									</div>
									<div class="form-group">
										<label for="input-2">Município *</label>
										<select class="form-control" name="municipio" required>
											<option value="" selected>Selecione...</option>
											<?php 
											// conexão
											$sql1 = "SELECT idMunicipio, dsMunicipio, dsUf FROM municipios ".
													"ORDER BY dsMunicipio";
											$resultado1 = mysqli_query($conn, $sql1);
											while ($linha1 = mysqli_fetch_array($resultado1, MYSQLI_NUM))
											{ ?>
												<option value="<?php echo $linha1[0];?>" <?=($idMunicipio==$linha1[0])?'selected':''?>><?php echo $linha1[1].' ('.$linha1[2].')';?></option>
											<?php
											} ?>
										</select>
									</div>
									<div class="form-group">
										<label for="input-2">E-mail *</label>
										<input type="text" class="form-control" name="email" value="<?php echo $email;?>" id="input-2" maxlength="75" placeholder="Entre seu Email" onblur="javascript:this.value=this.value.toUpperCase();" required>
									</div>
									<div class="form-group">
										<?php
										if ($idTipo=="D")
										{?>
											<label for="input-2">C.P.F.</label>
											<input type="text" class="form-control" name="cpf" value="<?php echo $nrCpf;?>" id="input-2" maxlength="14" placeholder="999.999.999-99">
										<?php
										}
										else
										{?>
											<label for="input-2">C.N.P.J.</label>
											<input type="text" class="form-control" name="cnpj" value="<?php echo $nrCnpj;?>" id="input-2" maxlength="18" placeholder="99.999.999/9999-99">
										<?php
										}?>
									</div>
									<div class="form-group">
										<label for="input-3">Telefone</label>
										<input type="text" class="form-control" name="telefone" value="<?php echo $telefone;?>" id="input-3" maxlength="14" placeholder="Entre seu Telefone">
									</div>
									<?php
									if ($idTipo=="D")
									{?>
									<div class="form-group">
										<label for="input-3">Tipo Sanguíneo</label>
										<select class="form-control" name="tpsangue" required>
											<option value="">Selecione...</option>
											<option value="A" <?=($tpSangue=='A')?'selected':''?>>A</option>
											<option value="B" <?=($tpSangue=='B')?'selected':''?>>B</option>
											<option value="AB" <?=($tpSangue=='AB')?'selected':''?>>AB</option>
											<option value="O" <?=($tpSangue=='O')?'selected':''?>>O</option>
										</select>
									</div>
									<div class="form-group">
										<label for="input-3">Fator RH</label>
										<select class="form-control" name="fator" required>
											<option value="">Selecione...</option>
											<option value="P" <?=($flFator=='P')?'selected':''?>>Positivo</option>
											<option value="N" <?=($flFator=='N')?'selected':''?>>Negativo</option>
										</select>
									</div>
									<?php
									}?>
									<div class="form-group">
										<label for="input-4">Senha *</label>
										<input type="password" class="form-control" name="senha" value="<?php echo $senha;?>" id="input-4" maxlength="10" placeholder="Entre sua senha" required>
									</div>
									<?php
									if ($idTipo=="H")
									{?>
										<div class="form-group">
											<label for="input-4">Atendimento</label>
											<textarea class="form-control" id="atendimento" name="atendimento" rows="4" cols="50"><?php echo $atendimento;?></textarea>
										</div>
									<?php
									} ?>
									<div class="form-group py-2">
										<div class="icheck-material-white">
										<input type="checkbox" name="aceita" id="user-checkbox1" value="<?php echo $flAceita;?>" <?php echo ($flAceita=='S'?'checked':'');?>>
										<label for="user-checkbox1">Eu aceito os Termos e Condições</label>
										</div>
									</div>
									<div class="form-group">
										<input type="hidden" name="codigo" value="<?php echo $codigo;?>">
										<input type="hidden" name="idTipo" value="<?php echo $idTipo;?>">
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
