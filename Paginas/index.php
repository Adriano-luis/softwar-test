<?php
session_start();
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {

} else {
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Estágio Softwar</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body class="incial">
	<div class="titulo">Estágio na Softwar</div>
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
	<a href="sair.php"><button>Sair</button><a/>
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
			<th>Ação</th>
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
			<td><a href="atualizar.php?id=<?= $usuario['id']; ?>">Atualizar</a> - <a href="excluir.php?id=<?= $usuario['id']; ?>" onclick="return confirm('Tem certeza que gostaria de excluir?')">Excluir</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
