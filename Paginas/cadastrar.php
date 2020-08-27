<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>	Cadastrar</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body class="cad">
	<div id="flex">
		<div><img src="../assets/images/softwar-logo.png"></div>
		<div class="formulario">
			<h2>Cadastrar novo usuário:</h2>
			<?php if(isset($_SESSION['cadastro'])){ echo $_SESSION['cadastro'];} else {$_SESSION['cadastro'] = "";} ?>
			<form method="POST" action="cadastro.php">
				<label>
					Nome:<br/>
					<input class="default" type="text" name="nome"><br/><br/>
				</label>

				<label >
					Email:<br/>
					<input class="default" type="email" name="email"><br/><br/>
				</label>

				<label>
					Senha:<br/>
					<input class="default" type="password" name="senha"><br/><br/>
				</label>

				<label>
					Data de nascimento:<br/>
					<input class="default" type="date" name="data"><br/><br/>
				</label>

				<label>
					UF:<br/>
					<select id="changeuf" class="default" name="uf">
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
					</select><br/><br/>
				</label>
				
				<label>
					Cidade:<br/>
					<select id="pop" class="default" type="text" name="cid"><br/><br/>
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
					</select><br/><br/>
				</label>

				<label>
					Observação:<br/>
					<textarea class="default2" name="obs"></textarea><br/><br/>
				</label>

				<label >
					Ativo:<br/>
					<input class="default2" type="checkbox" name="ativo" value="sim">Sim<br/><br/>
				</label>
			     
			    <input class="button" type="submit" value="Cadastrar">
			    
			</form>
		</div>
	</div>
	<script type="text/javascript" src="../assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>
