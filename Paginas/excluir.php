<?php
session_start();
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {

} else {
	header("location: login.php");
}

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
?>