<?php 
	// try {
	// 	$pdo = new PDO ('mysql:host=127.0.0.1;dbname=data', 'root', '');
	// } catch (PDOException $e) {
	// 	die($e->getMessage());
	// }

	include "dbcon.php";

	$value = 'Jihoon';
	$fan = 'may';
	$goods = 'luv';

	$query = $pdo->prepare("SELECT * FROM goodslist");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_ASSOC);

	// $count = 0;
	// foreach ($result as $index => $goodslist) {
	
	// 	$count += 1;
	// }

	// $query = $pdo->prepare("SELECT * FROM goodslist LIMIT ");
	// $query->execute();
	// $result = $query->fetchAll(PDO::FETCH_ASSOC);

	require 'index.view.php'
 ?>