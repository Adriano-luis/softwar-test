<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body class="cad">
	<div class="container">
		<img class=" float-left img-fluid" src="../assets/images/softwar-logo.png">
		<div class="formulario float-right">
			<h2>Cadastrar novo usuário:</h2>
			<?php if(isset($_SESSION['cadastro'])){ echo $_SESSION['cadastro'];} else {$_SESSION['cadastro'] = "";} ?>
			<form class="mx-auto d-block" method="POST" action="cadastro.php">
				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label>Nome:</label>
							<input class="form-control form-control-sm" type="text" name="nome">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label>Email:</label>
							<input class="form-control form-control-sm" type="email" name="email">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label>Senha:</label>
							<input class="form-control form-control-sm" type="password" name="senha">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-5">
						<div class="form-group">
							<label>Data de nascimento:</label>
							<input class="form-control form-control-sm" type="date" name="data">
						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label>UF:</label>
							<select id="changeuf" class="uf select form-control form-control-sm" name="uf">
								<option>AC</option>
								<option>AL</option>
								<option>AM</option>
								<option>AP</option>
								<option>PR</option>
								<option>SP</option>
							</select>
						</div>
					</div>

					<div class="col-5">
						<div class="form-group">
							<label>Cidade:</label>
							<select id="pop" class="form-control select form-control-sm" type="text" name="cid" placeholder="Selecione o Estado primeiro...">
							</select>
						</div>
					</div>
				</div>

				<div class="form-row">

				</div>

				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label>Endereço 1:</label>
							<input class="form-control form-control-sm" type="text" name="endereco-p">
						</div>
					</div>

					<div class="col-2">
						<div class="form-group">
							<label>Nº:</label>
							<input class="form-control form-control-sm" type="text" name="num-p">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-4">
						<div class="form-group">
							<label>Complemento:</label>
							<input class="form-control form-control-sm" type="text" name="comple-p">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label>Endereço 2:</label>
							<input class="form-control form-control-sm" type="text" name="endereco-s">
						</div>
					</div>

					<div class="col-2">
						<div class="form-group">
							<label>Nº:</label>
							<input class="form-control form-control-sm" type="text" name="num-s">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-4">
						<div class="form-group">
							<label>Complemento:</label>
							<input class="form-control form-control-sm" type="text" name="comple-s">
						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label>Observação:</label>
							<textarea class="obs form-control form-control-sm" name="obs"></textarea>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-1">
						<div class="form-group">
							<label>Ativo:</label>
							<input class="checkbox form-control" type="checkbox" name="ativo" value="sim">
						</div>
					</div>
					<div class="col-1">
						<div class="form-group">
							<label></label>
							<div>Sim</div>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-6">
						<input class="button" type="submit" value="Cadastrar">
					</div>
				</div>   
			</form>
		</div>
	</div>
	<script type="text/javascript" src="../assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/script.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
