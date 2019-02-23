<?php 
	try {
		$pdo = new PDO ('mysql:host=127.0.0.1;dbname=data', 'root', '');
	} catch (PDOException $e) {
		die($e->getMessage());
	}

	// $query = $pdo->prepare('SELECT * FROM goodslist');
	// $query->execute();
	// $result = $query->fetchAll(PDO::FETCH_ASSOC);

	// require 'index.view.php'
 ?>