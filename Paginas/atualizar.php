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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>	Atualizar</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body class="cad">
	<div class="container">
		<img  class="img-fluid float-left" src="../assets/images/softwar-logo.png">
		<div class="formulario float-right">
			<h2>Atualizar usuário:</h2>

			<form  class="mx-auto d-block" method="POST" action="atualizar-act.php">
				<input type="hidden" name="id" value="<?= $info['id'] ?>">
				
				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label>Nome:</label>
							<input class="form-control form-control-sm" type="text" name="nome" value="<?= $info['nome'] ?>">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label>Email:</label>
							<input class="form-control form-control-sm" type="email" name="email" value="<?= $info['email'] ?>">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<label>Senha:</label>
							<input class="form-control form-control-sm" type="password" name="senha" placeholder="Senha">

						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-5">
						<div class="form-group">
							<label>Data de nascimento:</label>
							<input class="form-control form-control-sm" type="date" name="data" value="<?= $info['data'] ?>">
						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label>UF:</label>
							<select id="changeuf" class="select form-control form-control-sm" name="uf">

								<option <?php echo ($info['uf'] == 'AC') ? 'selected': ''; ?>>AC</option>
								<option <?php echo ($info['uf'] == 'AL') ? 'selected': ''; ?>>AL</option>
								<option <?php echo ($info['uf'] == 'AM') ? 'selected': ''; ?>>AM</option>
								<option <?php echo ($info['uf'] == 'AP') ? 'selected': ''; ?>>AP</option>
								<option <?php echo ($info['uf'] == 'PR') ? 'selected': ''; ?>>PR</option>
								<option<?php echo ($info['uf'] == 'SP') ? 'selected': ''; ?>>SP</option>
			
							</select>
						</div>
					</div>

					<div class="col-5">
						<div class="form-group">
							<label>Cidade:</label>
							<select id="pop" class="select form-control form-control-sm" type="text" name="cid">
								<option><?= $info['cidade'] ?></option>
							</select>
						</div>
					</div>
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
							<textarea class="obs form-control form-control-sm" name="obs" ><?= $info['observacao'] ?></textarea>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-1">
						<div class="form-group">
							<label>Ativo:</label>
							<input class=" checkbox form-control form-control-sm" type="checkbox" name="ativo" value="sim" <?php echo ($info['ativo'] == 'sim') ? 'checked' : '';?>>
						</div>
					</div>

					<div class="col-1">
						<div class="form-group">
							<label></label>
							<div>Sim</div>
						</div>
					</div>
				</div>
			     
			    <input class="btn btn-primary mx-auto d-block btn-block" style="margin-left: ;" type="submit" value="Atualizar">
			</form>
		</div>
	</div>
	<script type="text/javascript" src="../assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/script.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
</html>
