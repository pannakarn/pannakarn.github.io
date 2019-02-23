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

	$query = $pdo->prepare("SELECT * FROM goodslist WHERE 
		(Name LIKE '%".$fName."%' and 
		FansiteName LIKE '%".$fFansite."%' and 
		Type LIKE '%".$fGoodsname."%' and
		GoodsName LIKE '%".$fType."%' and
		Code LIKE '%".$fCode."%' and
		Delivery LIKE '%".$fDelivery."%' and
		Status LIKE '%".$fStatus."%' and)");
	$query->execute();
	$result = $query->fetchAll(PDO::FETCH_ASSOC);


 ?>