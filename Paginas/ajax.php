<?php 
require 'config.php';
$uf = $_GET['uf'];

if(isset($uf) && !empty($uf)){

	$cidades = [];
	$json = [];
	$sql = $pdo->prepare("SELECT nome FROM cidades WHERE uf=:dado ");
	$sql->bindParam(':dado',$uf );
	$sql->execute();

	if ($sql->rowCount()> 0) {
		$cidades = $sql->fetchAll(PDO::FETCH_ASSOC);
		foreach ($cidades as $cidade) {
			$json = "<option>"+$cidade['nome']+"</option>";
		}

		json_encode($json);
	} else {
		echo "error";
	} 
	

}