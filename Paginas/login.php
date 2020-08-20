 <?php 
session_start();
require 'config.php';

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = md5(filter_input(INPUT_POST, 'senha'));

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
	<title>	Cadastrar</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body class="login">
	<div class="logo"><img src="../assets/images/softwar-logo.png"></div>
	<div class="formulario-log">
		<?php if ($_SESSION['msg']) {
			echo $_SESSION['msg'];
			$_SESSION['msg'] = '';
		} ?>
		<h2>Login:</h2><br/>

		<form method="POST">

			<label>
				Email:<br/>
				<input class="default" type="email" name="email"><br/><br/>
			</label>

			<label>
				Senha:<br/>
				<input class="default" type="password" name="senha"><br/><br/><br/>
			</label>
		     
		    <button  class="button-log1" type="submit" >Entrar</button>

		</form>

		<a href="cadastrar.php"><button class="button-log2">Cadastrar novo usuário</button><a/>
	</div>
</body>
</html>
