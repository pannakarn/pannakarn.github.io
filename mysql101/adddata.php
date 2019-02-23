<!DOCTYPE html>
<html lang="en">
<head>
  <title>รายการสินค้า</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="adddata.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  
</head>
<body>

  <h1>ฟอร์มสั่งซื้อสินค้า</h1>


<?php
		// define variables and set to empty values
		$nameErr = $fansitenameErr = $goodsnameErr = $_SESSION['codeErr'] = $typeErr = $deliveryErr = $statusErr ="";
		$name = $fansitename = $goodsname = $type = $code = $check = $delivery = $status = "";
		$nameCheck = $fansitenameCheck = $goodsnameCheck = $typeCheck = $_SESSION['codeCheck'] = $deliveryCheck = $statusCheck = 0;
    $total = -1;
    $printdelivery = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
  			if (empty($_POST["name"])) {
    			$nameErr = "อย่าลืมใส่ชื่อ";
    			$nameCheck = 1;
  			} else {
    			$name = test_input($_POST["name"]);
          $nameCheck = 2;
  			}

        if (empty($_POST["fansitename"])) {
          $fansitenameErr = "อย่าลืมใส่ชื่อบ้าน fansite";
          $fansitenameCheck = 1;
        } else {
          $fansitename = test_input($_POST["fansitename"]);
          $fansitenameCheck = 2;
        }

        if (empty($_POST["goodsname"])) {
          $goodsnameErr = "อย่าลืมใส่ชื่อสินค้า";
          $goodsnameCheck = 1;
        } else {
          $goodsname = test_input($_POST["goodsname"]);
          $goodsnameCheck = 2;
        }

        if (empty($_POST["type"])) {
          $typeErr = "อย่าลืมใส่ประเภทสินค้า";
          $typeCheck = 1;
        } else {
          $type = test_input($_POST["type"]);
          $typeCheck = 2;
        }

        if (empty($_POST["code"])) {
          $_SESSION['codeErr'] = "อย่าลืมใส่รหัสสินค้า";
          $_SESSION['codeCheck'] = 1;
        } else {
          $code = test_input($_POST["code"]);
          // $_SESSION['codeCheck'] = 2;
          include "checkCode.php";
        }

        if (empty($_POST["delivery"])) {
          $deliveryErr = "อย่าลืมใส่ช่วงเวลาจัดส่ง";
          $deliveryCheck = 1;
        } else {
          $delivery = test_input($_POST["delivery"]);
          $deliveryCheck = 2;
        }

        if (empty($_POST["status"])) {
          $statusErr = "อย่าลืมใส่สถานะ";
          $statusCheck = 1;
        } else {
          $status = test_input($_POST["status"]);
          $statusCheck = 2;
        }
		}

		function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
		}
	?>

  <section>
    <h3 class="topic">เพิ่มรายการสินค้า</h3>
    <p><span class="error">* จำเป็น</span></p>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
      <label class="label" id="left-label" for="name-text">Name</label><br>
      <input class="input is-rounded" type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
      
      <label class="label" id="left-label" for="name-text">Fansite Name </label><br>
      <input class="input is-rounded" type="text" name="fansitename" value="<?php echo $fansitename;?>">
      <span class="error">* <?php echo $fansitenameErr;?></span>
        <br><br>
      
      <label class="label" id="left-label" for="address-text">Type</label><br>
      <input class="input is-rounded" type="text" name="type" value="<?php echo $type;?>">
      <span class="error">* <?php echo $typeErr;?></span>
        <br><br>
      
      <label class="label" id="left-label" for="tel-text">Goods Name</label><br>
      <input class="input is-rounded" type="text" name="goodsname" value="<?php echo $goodsname;?>">
      <span class="error">* <?php echo $goodsnameErr;?></span>
        <br><br>
      
      <label class="label" id="left-label" for="email-text">Code</label><br>
      <input class="input is-rounded" type="text" name="code" value="<?php echo $code;?>">
      <span class="error">* <?php echo $_SESSION['codeErr'];?></span>
      <br><br>

      <label class="label" id="left-label" for="email-text">Delivery</label><br>
      <input class="input is-rounded" type="text" name="delivery" value="<?php echo $delivery;?>">
      <span class="error">* <?php echo $deliveryErr;?></span>
      <br><br>

      <label class="label" id="left-label" for="email-text">Status</label><br>
      <input class="input is-rounded" type="text" name="status" value="<?php echo $status;?>">
      <span class="error">* <?php echo $statusErr;?></span>
      <br><br>

      <input type="submit" name="submit" value="เพิ่ม" />
      <br>
      

    </form>
  </section>

<button id="back-btn" class="button is-primary" onclick="location.href='index.php'">
          กลับ
     </button>
  

    <section>
    <!-- <h3 class="topic">รายการสินค้าและยอดเงิน</h3> -->
    <p>
      <?php
          // $dataok = 1;
          // $dataok = $ok; 
          if($nameCheck==2 && $fansitenameCheck==2 && $goodsnameCheck==2 && $typeCheck==2 && $_SESSION['codeCheck']==2 && $deliveryCheck==2 && $statusCheck==2) {
            // echo "all pass";
            include "insert.php";
          } 
       ?>

     </p>
    
      
      
  </section>

   <!--  <script src="jquery-3.3.1.min.js"></script>
    <script src="jquery.js"></script> -->
</body>
</html>