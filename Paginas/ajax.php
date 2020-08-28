<?php 
require 'config.php';
$uf = $_GET['dado'];

if(isset($uf) && !empty($uf)){

	$cidades = [];
	$json =[];
	$sql = $pdo->prepare("SELECT nome FROM cidades WHERE uf=:data ");
	$sql->bindParam(':data',$uf );
	$sql->execute();

	if ($sql->rowCount()> 0) {
		$cidades = $sql->fetchAll(PDO::FETCH_ASSOC);
		
		echo json_encode($cidades);
		
	} else {
		echo "error";
	} 
	

}