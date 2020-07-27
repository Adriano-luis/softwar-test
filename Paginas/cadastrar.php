<!DOCTYPE html>
<html>
<head>
	<title>	Cadastrar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="cad">
	<div class="formulario">
		<h2>Cadastrar novo usuário:</h2>

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
				Cidade:<br/>
				<input class="default" type="text" name="cid"><br/><br/>
			</label>

			<label>
				UF:<br/>
				<select name="uf">
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
				<textarea name="obs"></textarea><br/><br/>
			</label>

			<label >
				Ativo:<br/>
				<input type="checkbox" name="ativo" value="sim">Sim<br/><br/>
			</label>
		     
		    <input class="button" type="submit" value="Cadastrar">
		</form>
	</div>
</body>
</html>
