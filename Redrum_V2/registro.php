<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php
	include_once "header.php";
	?>
	
	<script>
	function valida(){
		var senha = formulario.senha.value;
		var conf = formulario.confsenha.value;
		
		if (senha!=confsenha) {
			alert("Senhas não conferem, redigite!");
			formulario.senha.focus;
		}
	}
	</script>
</head>

<body class="bg-theme bg-theme6">

	<!-- start loader 
	<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
	<!-- end loader -->

	<!-- Start wrapper-->
	<div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
			<div class="card-content p-2">
				<div class="text-center">
					<img src="assets/images/redrum.png" height="15%" width="15%" alt="logo icon">
				</div>
				<div class="card-title text-uppercase text-center py-3">Cadastre-se</div>
					<form name="formulario" action="registro_incluir.php" method="POST">
						<div class="form-group">
							<label for="exampleInputName" class="sr-only">Nome</label>
							<div class="position-relative has-icon-right">
								<input type="text" name="nome" class="form-control input-shadow" placeholder="Entre seu nome" value="" required autofocus>
								<div class="form-control-position">
									<i class="icon-user"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmailId" class="sr-only">E-mail</label>
							<div class="position-relative has-icon-right">
								<input type="email" name="email" class="form-control input-shadow" placeholder="Entre seu E-mail" value="" required>
								<div class="form-control-position">
									<i class="icon-envelope-open"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword" class="sr-only">Senha</label>
							<div class="position-relative has-icon-right">
								<input type="password" name="senha" class="form-control input-shadow" placeholder="Escolha sua senha" value="" required>
								<div class="form-control-position">
									<i class="icon-lock"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword" class="sr-only">Confirme a Senha</label>
							<div class="position-relative has-icon-right">
								<input type="password" name="confsenha" class="form-control input-shadow" placeholder="Confirme sua senha" value="" onblur="valida()" required>
								<div class="form-control-position">
									<i class="icon-lock"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
							  <input type="radio" class="form-check-input" name="tipo" id="radio1" value="D" checked>Doador
							  <label class="form-check-label" for="radio1"></label>
							</div>
							<div class="form-check">
							  <input type="radio" class="form-check-input" name="tipo" id="radio2" value="B">Banco de Sangue
							  <label class="form-check-label" for="radio2"></label>
							</div>
							<div class="form-check">
							  <input type="radio" class="form-check-input" name="tipo" id="radio3" value="H">Hemocentro
							  <label class="form-check-label" for="radio2"></label>
							</div>
						</div>
						<div class="form-group">
							<div class="icheck-material-white">
								<input type="checkbox" name="termos">
								<label for="user-checkbox">Eu aceito os termos e condições</label>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-light btn-block waves-effect waves-light" value="Cadastrar">
							<input type="button" class="btn btn-light btn-block waves-effect waves-light" value="Voltar" onClick="history.go(-1)">
						</div>
					</form>
				</div>
			</div>
	    </div>
    
	</div><!--wrapper-->
	
	<!-- Bootstrap core JavaScript-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
	<!-- sidebar-menu js -->
	<script src="assets/js/sidebar-menu.js"></script>
  
	<!-- Custom scripts -->
	<script src="assets/js/app-script.js"></script>
</body>
</html>
