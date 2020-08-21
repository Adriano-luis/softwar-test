<?php
session_start();

/*vereica se um ID foi pego para exclusão do cadastro do ID, caso não, algum erro ocorreu
 e então retorna para o login*/
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {

	require 'config.php';

	//Recebendo e verificando o ID, fazendo a exclusão do cadastro
	$id = filter_input(INPUT_GET, 'id');
	if($id){
		$sql= $pdo->prepare("DELETE FROM usuario WHERE id=:id");
		$sql->bindParam(':id', $id);
		$sql->execute();
	}

	header("location: index.php");
	exit;

} else {
	header("location: login.php");
}
?>