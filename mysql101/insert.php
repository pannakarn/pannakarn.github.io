<?php 
	// try {
	// 	$pdo = new PDO ('mysql:host=127.0.0.1;dbname=data', 'root', '');
	// } catch (PDOException $e) {
	// 	die($e->getMessage());
	// }
	include "dbcon.php";

	$fName = $_REQUEST['name'];
	$fFansite = $_REQUEST['fansitename'];
	$fGoodsname = $_REQUEST['goodsname'];
	$fType = $_REQUEST['type'];
	$fCode = $_REQUEST['code'];
	$fDelivery = $_REQUEST['delivery'];
	$fStatus = $_REQUEST['status'];

	$query = $pdo->prepare('SELECT * FROM goodslist ORDER BY ID DESC LIMIT 1');
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_ASSOC);

	foreach ($result as $index => $goodslist) {
	
		$id = $goodslist['ID'];
	}

	$id += 1;

	try {
		$queryInsert = $pdo->prepare("INSERT INTO `goodslist` VALUES (:id,:fName,:fFansite,:fType,:fGoodsname,:fCode,:fDelivery,:fStatus)");
		$changePage = $queryInsert->execute(array(':id'=>$id, ':fName'=>$fName, ':fFansite'=>$fFansite, ':fType'=>$fType, ':fGoodsname'=>$fGoodsname, ':fCode'=>$fCode, ':fDelivery'=>$fDelivery, ':fStatus'=>$fStatus));
		$message = "บึนทึกข้อมูลสำเร็จ";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Refresh:0; url=index.php");
		// header("Location:index.php");
	} catch (PDOException $e) {
		$message = "การบันทึกข้อมูลผิดพลาด";
		echo "<script type='text/javascript'>alert('$message');</script>";
		// echo $e->getMessage();
	}
	
 ?>