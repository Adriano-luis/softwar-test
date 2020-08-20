<?php 
require 'config.php';

//receber os dados dos campos do formulário da página atualizar.php
//Filtrar eles para diminuir vulnerabilidades em ataques

$id = filter_input(INPUT_POST, 'id');
$name = ucfirst(filter_input(INPUT_POST, 'nome'));
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = md5(filter_input(INPUT_POST, 'senha'));
$dataNascimento = filter_input(INPUT_POST, 'data',);
$cidade = filter_input(INPUT_POST, 'cid');
$uF = filter_input(INPUT_POST, 'uf');
$observacao = filter_input(INPUT_POST, 'obs');
$ativo = filter_input(INPUT_POST, 'ativo');

//verificar se o campo ativo está vazio se sim recebe o valor de "não" para ser guardado
if(empty($ativo)) {
	$ativo = "não";
}

//verificar se os principais campos foram preenchidos e não estão vazios, usar metodo de envio de dados para o DB mais seguro usando identificação por ID.
if(isset($name,$email,$senha,$cidade) && !empty($name && $email && $senha && $cidade)){
	$sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, senha = :senha, data =:dataNascimento, cidade = :cidade, uf = :uf, observacao = :observacao, ativo = :ativo  WHERE id=:id");
	$sql->bindParam(':id', $id);
	$sql->bindParam(':nome', $name);
	$sql->bindParam(':email', $email);
	$sql->bindParam(':senha', $senha);
	$sql->bindParam(':dataNascimento', $dataNascimento);
	$sql->bindParam(':cidade', $cidade);
	$sql->bindParam(':uf', $uF);
	$sql->bindParam(':observacao', $observacao);
	$sql->bindParam(':ativo', $ativo);
	$sql->execute();

	header("location: index.php");
	exit;
	
 } else {
	header("location: atualizar.php");
	exit;
}
?>
