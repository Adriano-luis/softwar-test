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
					<div class="col-10">
						<div class="form-group">
							<label>Nome:</label>
							<input class="default form-control form-control-sm" type="text" name="nome">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-10">
						<div class="form-group">
							<label>Email:</label>
							<input class="default form-control" type="email" name="email">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-10">
						<div class="form-group">
							<label>Senha:</label>
							<input class="default form-control" type="password" name="senha">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-10">
						<div class="form-group">
							<label>Data de nascimento:</label>
							<input class="default form-control" type="date" name="data">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-2">
						<div class="form-group">
							<label>UF:</label>
							<select id="changeuf" class="default uf form-control" name="uf">
								<option>AC</option>
								<option>AL</option>
								<option>AM</option>
								<option>AP</option>
								<option>BA</option>
								<option>CE</option>
								<option>DF</option>
								<option>ES</option>
								<option>GO</option>
								<option>MA</option>
								<option>MG</option>
								<option>MS</option>
								<option>MT</option>
								<option>PA</option>
								<option>PB</option>
								<option>PE</option>
								<option>PI</option>
								<option>PR</option>
								<option>RJ</option>
								<option>RN</option>
								<option>RO</option>
								<option>RR</option>
								<option>RS</option>
								<option>SC</option>
								<option>SE</option>
								<option>SP</option>
								<option>TO</option>			
							</select>
						</div>
					</div>
					<div class="col-8">
						<div class="form-group">
							<label>Cidade:</label>
							<select id="pop" class="default form-control" type="text" name="cid" placeholder="Selecione o Estado primeiro...">
							</select>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-10">
						<div class="form-group">
							<label>Observação:</label>
							<textarea class="default2 obs form-control" name="obs"></textarea>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-1">
						<div class="form-group">
							<label>Ativo:</label>
							<input class="default2 checkbox form-control" type="checkbox" name="ativo" value="sim">
						</div>
					</div>
					<div class="col">
						<div class="sim form-group">Sim</div>
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
