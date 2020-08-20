<?php 
require 'config.php';

//receber os dados dos campos do formulário da página cadastrar.php
//Filtrar eles para diminuir vulnerabilidades em ataques

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

//verificar se os principais campos foram preenchidos e não estão vazios, usar metodo de envio de dados para o DB mais seguro
if(isset($name,$email,$senha,$cidade) && !empty($name && $email && $senha && $cidade)){
	$sql = $pdo->prepare("INSERT INTO Usuario (nome, email, senha, data, cidade, uf , observacao , ativo) VALUES (:nome, :email, :senha , :dataNascimento, :cidade, :uf, :observacao, :ativo)");
	$sql->bindParam(':nome', $name);
	$sql->bindParam(':email', $email);
	$sql->bindParam(':senha', $senha);
	$sql->bindParam(':dataNascimento', $dataNascimento);
	$sql->bindParam(':cidade', $cidade);
	$sql->bindParam(':uf', $uF);
	$sql->bindParam(':observacao', $observacao);
	$sql->bindParam(':ativo', $ativo);
	$sql->execute();

	header("location: login.php");
	
 } else {
	header("location: cadastrar.php");

}
?>
