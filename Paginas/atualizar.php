<?php
session_start();
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {

} else {
	header("location: login.php");
}
require 'config.php';

//recebendo e verificando a existencia de ID, pegando dados do ID no DB
$info=[];
$id = filter_input(INPUT_GET, 'id');
if($id){
	$sql= $pdo->prepare("SELECT * FROM usuario WHERE id=:id");
	$sql->bindParam(':id', $id);
	$sql->execute();

	if ($sql->rowCount() > 0) {
		$info = $sql->fetch(PDO::FETCH_ASSOC);

	} else {
		header("location: index.php");
		exit;
	}
} else{
	header("location: index.php");
	exit;
}

// Fromeulário com as informações do cadastro no DB.
?>
<!DOCTYPE html>
<html>
<head>
	<title>	Atualizar</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body class="cad">
	<div id="flex">
		<div><img src="../assets/images/softwar-logo.png"></div>
		<div class="formulario">
			<h2>Atualizar usuário:</h2>

			<form method="POST" action="atualizar-act.php">
				<input type="hidden" name="id" value="<?= $info['id'] ?>">
				<label>
					Nome:<br/>
					<input class="default" type="text" name="nome" value="<?= $info['nome'] ?>"><br/><br/>
				</label>

				<label >
					Email:<br/>
					<input class="default" type="email" name="email" value="<?= $info['email'] ?>"><br/><br/>
				</label>

				<label>
					Senha:<br/>
					<input class="default" type="password" name="senha" value="<?= $info['senha'] ?>"><br/><br/>
				</label>

				<label>
					Data de nascimento:<br/>
					<input class="default" type="date" name="data" value="<?= $info['data'] ?>"><br/><br/>
				</label>

				<label>
					Cidade:<br/>
					<input class="default" type="text" name="cid" value="<?= $info['cidade'] ?>"><br/><br/>
				</label>

				<label>
					UF:<br/>
					<select name="uf" >
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
					<textarea name="obs" ><?= $info['observacao'] ?></textarea><br/><br/>
				</label>

				<label >
					Ativo:<br/>
					<input type="checkbox" name="ativo" value="sim">Sim<br/><br/>
				</label>
			     
			    <input class="button" type="submit" value="Atualizar">
			</form>
		</div>
	</div>
</body>
</html>
