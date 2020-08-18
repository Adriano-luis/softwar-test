<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>	Cadastrar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="login">
	<div class="formulario log">
		<h2>Login:</h2>

		<form method="POST" action="cadastro.php">

			<label >
				Email:<br/>
				<input class="default" type="email" name="email"><br/><br/>
			</label>

			<label>
				Senha:<br/>
				<input class="default" type="password" name="senha"><br/><br/>
			</label>
		     
		    <input class="button" type="submit" value="Cadastrar">
		</form>
	</div>
</body>
</html>
