 <?php 
session_start();
require 'config.php';

//pegando os dados de acesso do usuário
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = md5(filter_input(INPUT_POST, 'senha'));

//Verificando se existe esse cadastro no DB, se existir ele loga, caso não, ele aparece uma msg de erro
if(isset($email, $senha) && !empty($email && $senha)) {
	$sql = $pdo->prepare("SELECT * FROM usuario WHERE email=:email AND senha=:senha");
	$sql->bindParam(':email',$email );
	$sql->bindParam(':senha',$senha);
	$sql->execute();

	if ($sql->rowCount()> 0) {
		$user = $sql->fetch(PDO::FETCH_ASSOC);
		$_SESSION['id'] = $user['id'];

		header("location: index.php");
	} else{
		$_SESSION['msg'] = 'Campos preenchidos incorretamente!';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Login Softwar</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body class="login">
	<div class="container">
		<img class=" mx-auto d-block img-fluid" src="../assets/images/softwar-logo.png">
		<div class="formulario-log justify-content-center">
			<?php if (isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				$_SESSION['msg'] = '';
				} else {$_SESSION['msg'] = '';}
			?>
			<form method="POST" class="mx-auto d-block">
				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label for="email">Email:</label>
							<input id="email" class="form-control" type="email" name="email">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label for="senha">Senha:</label>
							<input id="senha" class="form-control" type="password" name="senha">
						</div>
					</div>
				</div>
			    <div class="form-row">
					<div class="col">
						<div class="form-group">
							<button  class="button-log1" type="submit" >Entrar</button>
						</div>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col">
					<a href="cadastrar.php"><button class="button-log2">Cadastrar novo usuário</button><a/>
				</div>
			</div>
		</div>
	</div>
	
<script type="text/javascript" src="../assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
