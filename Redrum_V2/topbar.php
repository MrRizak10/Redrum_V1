		<?php
		$nome = "Username";

		$sql = "SELECT * FROM usuarios ".
				"WHERE (Email='$usuario') AND (Senha='$senha')";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_num_rows($result);

		if ($row > 0)
		{
			while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
			{
				$codigo = $row[0];
				$coduser = $row[0];
				$nome = substr($row[1],0,strpos($row[1],' '));
				$nomecompleto = $row[1];
				$email = $row[2];
				$senha = $row[3];
				$telefone = $row[4];
				$idTipo = $row[5];
				$dsEndereco = $row[6];
				$dsComplemento = $row[7];
				$nrCep = $row[8];
				$dsBairro = $row[9];
				$idMunicipio = $row[10];
				$nrCpf = $row[11];
				$nrCnpj = $row[12];
				$tpSangue = $row[13];
				$flFator = $row[14];
				$flAceita = $row[15];
				$atendimento = $row[16];
			}
		}
		else
		{
			mysqli_close($conn);
			header('Location: index.html');
		} ?>

		<header class="topbar-nav">
			<nav class="navbar navbar-expand fixed-top">
				<ul class="navbar-nav mr-auto align-items-center">
					<li class="nav-item">
						<a class="nav-link toggle-menu" href="javascript:void();">
							<i class="icon-menu menu-icon"></i>
						</a>
					</li>
<!--					<li class="nav-item">
						<form class="search-bar">
							<input type="text" class="form-control" placeholder="Enter keywords">
							<a href="javascript:void();"><i class="icon-magnifier"></i></a>
						</form>
					</li> -->
				</ul>
		 
				<ul class="navbar-nav align-items-center right-nav-link">
<!--					<li class="nav-item dropdown-lg">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
						<i class="fa fa-envelope-open-o"></i></a>
					</li>-->
					<li class="nav-item dropdown-lg">
						<a href="notificacoes.php"><i class="fa fa-bell-o"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
							<span class="user-profile"><img src="assets/images/perfil.png" class="img-circle" alt="user avatar"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li class="dropdown-item user-details">
								<a href="javaScript:void();">
									<div class="media">
										<div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar">
										</div>
										<div class="media-body">
											<h6 class="mt-2 user-title"><?php echo $nome;?></h6>
											<p class="user-subtitle"><?php echo $email;?></p>
										</div>
									</div>
								</a>
							</li>
							<li class="dropdown-divider"></li>
							<li class="dropdown-item"><a href="perfildoador.php"><i class="icon-wallet mr-2"></i> Perfil</a></li>
							<li class="dropdown-divider"></li>
<!--							<li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
							<li class="dropdown-divider"></li>-->
							<a href="logout.php">
								<li class="dropdown-item"><i class="icon-power mr-2"></i> Sair</li>
							</a>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
