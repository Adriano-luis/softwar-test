<?php

//realizar a conexão com o banco de dados
$dbName = 'mysql:dbname=softwar;host=localhost';
$dbUser = 'root';
$dbPass = '';
 
 try {
 	$pdo = new PDO($dbName, $dbUser,$dbPass);


 } catch (PDOException $e) {
 	echo "Conexão Falhou: ".$e->getMessage();
 }