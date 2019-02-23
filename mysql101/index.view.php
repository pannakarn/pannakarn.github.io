<!DOCTYPE html>
<html lang="en">
<head>
	<title>รายการสินค้า</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="bulma-0.7.2/css/bulma.min.css"> -->
    <link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	
</head>
<body>

        <?php 
        $name = $fansitename = $goodsname = $type = $code = $check = $delivery = $status = "";
        $click = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $name = test_input($_POST["name"]);
            $fansitename = test_input($_POST["fansitename"]);
            $goodsname = test_input($_POST["goodsname"]);
            $type = test_input($_POST["type"]);
            $code = test_input($_POST["code"]);
            $delivery = test_input($_POST["delivery"]);
            $status = test_input($_POST["status"]);
            $click = 1;
            // include "advance.php";
        
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

     ?> 


     <?php 
        if (isset ($_POST["submit"])) {
            try {
                $pdo = new PDO ('mysql:host=127.0.0.1;dbname=data', 'root', '');
            } catch (PDOException $e) {
                die($e->getMessage());
            }

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
                Status LIKE '%".$fStatus."%')");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
        }
    
     ?>

	<h1>ตรวจสอบสถานะสินค้า</h1>

	<section class="section">
        <div class="advance">
                <button id="advance-btn" class="button is-primary">
                    advance search
                 </button>

        </div>
        
        <button id="adddata-btn" class="button is-primary" onclick="location.href='adddata.php'">
                    เพิ่มรายการสินค้า
        </button>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <div class="advance-inner">
	        	<div class="field is-horizontal">
	        	<section>
                    <div class="field-label is-normal-name">
                        <label class="label" id="left-label" for="name-text">Name</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <input  class="input is-rounded" 
                                    type="text" id="name-text"
                                    placeholder="Enter name"
                                    name="name">
                        </p>
                        </div>
                    </div>
                     </section>
                </div>
                
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" id="right-label" for="fansite-text">FansiteName</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <input  class="input is-rounded" 
                                    type="text" id="fansite-text"
                                    placeholder="Enter fansite name"
                                    name="fansitename">
                        </p>
                        </div>
                    </div>
                </div>
	        
                <div class="field is-horizontal">
                    
					<div class="field-label is-normal">
                        <label class="label" id="left-label" for="type-text">Type</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <input  class="input is-rounded" 
                                    type="text" id="type-text"
                                    placeholder="Enter type"
                                    name="type">
                        </p>
                        </div>
                    </div>

                    <div class="field-label is-normal">
                        <label class="label"  id="right-label" for="goods-name-text">Goods Name</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <input  class="input is-rounded" 
                                    type="text" id="goods-name-text"
                                    placeholder="Enter goods name"
                                    name="goodsname">
                        </p>
                        </div>
                    </div>

                </div>

                <div class="field is-horizontal">
                    
					<div class="field-label is-normal">
                        <label class="label" id="left-label" for="code-text">Code</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <input  class="input is-rounded" 
                                    type="text" id="code-text"
                                    placeholder="Enter code"
                                    name="code">
                        </p>
                        </div>
                    </div>

                    <div class="field-label is-normal">
                        <label class="label" id="right-label" for="derivery-text">Delivery</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <input  class="input is-rounded" 
                                    type="text" id="derivery-text"
                                    placeholder="Enter delivery"
                                    name="delivery">
                        </p>
                        </div>
                    </div>

                </div>

                <div class="field is-horizontal" id="button-ad">                    
					<div class="field-label is-normal">
                        <label class="label" id="left-label" for="status-text">Status</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control">
                            <input  name="status"
                                    class="input is-rounded" 
                                    type="text" id="status-text"
                                    placeholder="Enter status">
                        </p>
                        </div>
                    </div>
                    <div id="advance-2">  
                		<!-- <button action="advance.php" id="advance-submit-btn" class="button is-primary">
                    		<i class="fas fa-search"></i>
                 		</button> --> 

                        <input id="advance-submit-btn" type="submit" name="submit" value="ค้นหา" />
					</div>
                </div>
            </div>    	
        </div>
    </section>
    </form>

    <?php 
        
     ?>



	<table class="table" id="data_table">
            <tr>
            	<th>Name</th>
                <th>Fansite Name</th>
                <th>Type</th>
                <th>Goods Name</th>
                <th>Code</th>
                <th>Delivery</th>
                <th id="status-column">Status</th>
            </tr>

            <?php foreach ($result as $goodslist): ?>
                <tr>
                    <td><?= $goodslist['Name'] ?></td>
                    <td><?= $goodslist['FansiteName'] ?></td>
                    <td><?= $goodslist['Type'] ?></td>
                    <td><?= $goodslist['GoodsName'] ?></td>
                    <td><?= $goodslist['Code'] ?></td>
                    <td><?= $goodslist['Delivery'] ?></td>
                    <td><?= $goodslist['Status'] ?></td>
                </tr>
            <?php endforeach; ?>
    </table>

    <h2>ข้อมูลสถานะสินค้าที่เปิดหารของร้าน <a href="https://docs.google.com/spreadsheets/d/1XM8Gu3gq7xBUZU-rd--8ueD2r1_WetKG5n2rfpyKfzE/edit?usp=sharing">@littleplusx98</a></h2>


    <script src="jquery-3.3.1.min.js"></script>
    <script src="myscript.js"></script>
</body>
</html>