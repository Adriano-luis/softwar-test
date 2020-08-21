<?php
session_start();
//varifca se existe o ID e atualiza o cadastro desse ID, caso não, retorna para o login
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
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
} else {
	header("location: login.php");
}

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
 
						<option <?php echo ($info['uf'] == 'AC') ? 'selected': ''; ?>>AC</option>
						<option <?php echo ($info['uf'] == 'AL') ? 'selected': ''; ?>>AL</option>
						<option <?php echo ($info['uf'] == 'AM') ? 'selected': ''; ?>>AM</option>
						<option <?php echo ($info['uf'] == 'AP') ? 'selected': ''; ?>>AP</option>
						<option <?php echo ($info['uf'] == 'BA') ? 'selected': ''; ?>>BA</option>
						<option <?php echo ($info['uf'] == 'CE') ? 'selected': ''; ?>>CE</option>
						<option <?php echo ($info['uf'] == 'DF') ? 'selected': ''; ?>>DF</option>
						<option <?php echo ($info['uf'] == 'ES') ? 'selected': ''; ?>>ES</option>
						<option <?php echo ($info['uf'] == 'GO') ? 'selected': ''; ?>>GO</option>
						<option <?php echo ($info['uf'] == 'MA') ? 'selected': ''; ?>>MA</option>
						<option <?php echo ($info['uf'] == 'MG') ? 'selected': ''; ?>>MG</option>
						<option <?php echo ($info['uf'] == 'MS') ? 'selected': ''; ?>>MS</option>
						<option <?php echo ($info['uf'] == 'MT') ? 'selected': ''; ?>>MT</option>
						<option <?php echo ($info['uf'] == 'PA') ? 'selected': ''; ?>>PA</option>
						<option <?php echo ($info['uf'] == 'PB') ? 'selected': ''; ?>>PB</option>
						<option <?php echo ($info['uf'] == 'PE') ? 'selected': ''; ?>>PE</option>
						<option <?php echo ($info['uf'] == 'PI') ? 'selected': ''; ?>>PI</option>
						<option <?php echo ($info['uf'] == 'PR') ? 'selected': ''; ?>>PR</option>
						<option<?php echo ($info['uf'] == 'RJ') ? 'selected': ''; ?>>RJ</option>
						<option<?php echo ($info['uf'] == 'RN') ? 'selected': ''; ?>>RN</option>
						<option<?php echo ($info['uf'] == 'RO') ? 'selected': ''; ?>>RO</option>
						<option<?php echo ($info['uf'] == 'RR') ? 'selected': ''; ?>>RR</option>
						<option<?php echo ($info['uf'] == 'RS') ? 'selected': ''; ?>>RS</option>
						<option<?php echo ($info['uf'] == 'SC') ? 'selected': ''; ?>>SC</option>
						<option<?php echo ($info['uf'] == 'SE') ? 'selected': ''; ?>>SE</option>
						<option<?php echo ($info['uf'] == 'SP') ? 'selected': ''; ?>>SP</option>
						<option<?php echo ($info['uf'] == 'TO') ? 'selected': ''; ?>>TO</option>			
					</select><br/><br/>
				</label>

				<label>
					Observação:<br/>
					<textarea name="obs" ><?= $info['observacao'] ?></textarea><br/><br/>
				</label>

				<label >
					Ativo:<br/>
					<input type="checkbox" name="ativo" value="sim" <?php echo ($info['ativo'] == 'sim') ? 'checked' : '';?> >Sim<br/><br/>
				</label>
			     
			    <input class="button" type="submit" value="Atualizar">
			</form>
		</div>
	</div>
</body>
</html>
