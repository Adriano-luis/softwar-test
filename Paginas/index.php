<?php
session_start();

//verificando se o ID existe, se sim executa o html, caso não, retona a o login
if (isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Estágio Softwar</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="fundo">
			<div  class="h1 text-center">Estágio na Softwar</div>
			<?php
			$lista = [];
			require 'config.php';

		 	//Pegando e verificando os dados do BD
			$sql = $pdo->query("SELECT * FROM Usuario");
			if($sql->rowCount() > 0){
				$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
			} else{ 
				echo "<div style='color:#ef7e04;'>Não há usuários cadastrados!</div>"; 
			}

			//criação da tablea com html e listagem dos intens encintrados no DB
			?>
			<a href="sair.php"><button class="btn btn-outline-danger float-right" style="width: 140px; margin: 10px;">Sair</button><a/>
			<div class="table-responsive">
				<table class="table table table-hover table-bordered table-sm">
					<thead class="thead-dark">
						<tr>
							<th>Id</th>
							<th>Nome</th>
							<th>Email</th>
							<th>Senha</th>
							<th>Data-nasci</th>
							<th>Cidade</th>
							<th>UF</th>
							<th>Observação</th>
							<th>Ativo</th>
							<th>Ação</th>
						</tr>
					</thead>

					<?php foreach ($lista as $usuario): ?>
					<tbody>
						<tr>
							<td><?= $usuario['id']; ?></td>
							<td><?= $usuario['nome']; ?></td>
							<td><?= $usuario['email']; ?></td>
							<td><?= $usuario['senha']; ?></td>
							<td><?= date('d/m/Y', strtotime($usuario['data'])); ?></td>
							<td><?= $usuario['cidade']; ?></td>
							<td><?= $usuario['uf']; ?></td>
							<td><?= $usuario['observacao']; ?></td>
							<td><?= $usuario['ativo']; ?></td>
							<td><a  class="btn btn-success btn-sm btn-block" href="atualizar.php?id=<?= $usuario['id']; ?>">Atualizar</a><a class="btn btn-danger btn-sm btn-block" href="excluir.php?id=<?= $usuario['id']; ?>" onclick="return confirm('Tem certeza que gostaria de excluir?')">Excluir</a></td>
						</tr>
					</tbody>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/script.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>
<?php } else {
	header("location: login.php");
}
?>