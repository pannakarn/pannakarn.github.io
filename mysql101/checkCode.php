<?php 
	// try {
	// 	$pdo = new PDO ('mysql:host=127.0.0.1;dbname=data', 'root', '');
	// } catch (PDOException $e) {
	// 	die($e->getMessage());
	// }
	include "dbcon.php";

	$fCode = $_REQUEST['code'];

	$query = $pdo->prepare('SELECT * FROM goodslist');
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_ASSOC);

	$checkCode = 0;

	foreach ($result as $index => $goodslist) {
		if($goodslist['Code'] == $fCode) {
			$checkCode = 1;
			break;
		} 
	}

	if($checkCode == 1) {
		$_SESSION['codeErr'] = "รหัสสินค้าต้องไม่ซ้ำกับที่มีอยู่";
		$_SESSION['codeCheck'] = 1;
	} else {
		$_SESSION['codeCheck'] = 2;
		$_SESSION['codeErr'] = "";
	}


 ?>