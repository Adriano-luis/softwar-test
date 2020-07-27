<!DOCTYPE html>
<html>
<head>
	<title> Teste estágio Softwar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="titulo"> Página de teste para estágio na Softwar</div>
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
	 
	<a href="cadastrar.php"><button>Cadastrar novo usuário</button><a/>
	<table border="0">
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
		</tr>

		<?php foreach ($lista as $usuario): ?>
		<tr>
			<td><?= $usuario['id']; ?></td>
			<td><?= $usuario['nome']; ?></td>
			<td><?= $usuario['email']; ?></td>
			<td><?= $usuario['senha']; ?></td>
			<td><?= $usuario['data']; ?></td>
			<td><?= $usuario['cidade']; ?></td>
			<td><?= $usuario['uf']; ?></td>
			<td><?= $usuario['observacao']; ?></td>
			<td><?= $usuario['ativo']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
