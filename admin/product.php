<?php

require_once __DIR__ . "/../libs/config.inc.php";
require_once __DIR__ . "/../libs/admin/func.inc.php";

$helper = new helperAdmin($db);

if (!$helper->checkLogin()) {
    $helper->redirectLogin();
    exit();
}
$product_ = $helper->productQuery($db);

if (isset($_POST['action']) && $_POST['action'] == 'deleteEntry') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    if ($id > 0) {
        $query = "DELETE FROM product WHERE Product_ID=" . $id . " LIMIT 1";
        $result = $db->query($query);
        echo 'ok';
    } else {
        echo 'err';
    }
    exit; // finish execution since we only need the "ok" or "err" answers from the server.
}

if (isset($_POST['Add'])) {
    $ID = $_POST['product_id'];
    $name = $_POST['product_name'];
    $detail = $_POST['product_detail'];
    $date = $_POST['product_date'];
    $price = $_POST['product_price'];
    $q = "INSERT INTO `product` (`Product_ID`, `Product_Name`, `Product_Detail`, `Product_Date`, `Product_Price`, `Product_Pic`, `Admin_ID`)
     VALUES($ID, $name, $detail, $date, $price, 'upload/images/image-not-found.png', 1)";
    $result = $db->query($q);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>บึงบัว</title>
    <meta charset="utf-8">
    <meta name="viewport">
    <!-- Bootstrap -->
    <link href="../admin/assets/option/vendors//bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../admin/assets/option/build/css/custom.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="../admin/assets/option/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admin/assets/option/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Datatable-->
    <script src="../admin/assets/option/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../admin/assets/option/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
         $(function(){
               $('#myTable').DataTable();
            });
var currentRow,
    id;
$(document).on('click','.deletedata',function(){
    id = $(this).attr('value'); // Get the clicked id for deletion
    currentRow = $(this).closest('tr'); // Get a reference to the row that has the button we clicked
    console.log(location)
    $.ajax({
        type:'POST',
        url:location.pathname, // sending the request to the same page we're on right now
        data:{'action':'deleteEntry','id':id},
        success:function(response){
            if (response == 'ok') {
                // Hide the row nicely and remove it from the DOM once the animation is finished.
                currentRow.slideUp(500,function(){
                    currentRow.remove();
                })
            } else {
                // throw an error modally to let the user know there was an error
            }
        }
    })
});
    </script>
    <link rel="stylesheet" href="../admin/assets/css/event.css">
</head>

<body>
    <div class="top_nav">
        <div class="nav_menu">
            <nav class="">
                <a href="<?php echo ROOT_URL . "/admin/dashboard.php" ?>">
                    <img src="../admin/assets/images/navbar.png" style="margin-left: 1%;">
                </a>
                <ul class="nav navbar-nav navbar-right">
                    <a href="<?php echo ROOT_URL . "/admin/logout.php" ?>">
                        <button class=" btn-lg btn-danger" type="submit" style="margin-top:25px;width: 12%">LOGOUT</button>
                    </a>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container" style="width:80%">
            <h1>ผลิตภัณฑ์ชุมชนบึงบัว</h1>
            <a href="#addEmployeeModal" data-toggle="modal">
            <button class="btn-lg btn-success" type="submit" style="float:right">+เพิ่มสินค้า</button>
            </a>
            <hr>
        <table class="table table-bordered" id="myTable">
        <thead>
        <tr id="tablehead">
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รายละเอียดสินค้า</th>
            <th>วันผลิตสินค้า</th>
            <th>ราคาสินค้า</th>
            <th>ภาพประกอบสินค้า</th>
            <th>ลบ</th>
        </tr>
        </thead>
        <tbody>
        <?php
while ($row = $product_->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['Product_ID'] . "</td>";
    echo "<td>" . $row['Product_Name'] . "</td>";
    echo "<td>" . $row['Product_Detail'] . "</td>";
    echo "<td>" . $row['Product_Date'] . "</td>";
    echo "<td>" . $row['Product_Price'] . "</td>";
    echo "<td>" . "<img src=" . "../" . $row['Product_Pic'] . " with='35px' height='35px'/" . "</td>";
    echo "<td>" . "<button class='deletedata' value=" . $row['Product_ID'] . ">Delete</button>" . "</td>";
    echo "</tr>";
}
?>
        </tbody>
    </table>
    <div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST">
					<div class="modal-header">
						<h4 class="modal-title">เพิ่มสินค้า</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
                    <div class="modal-body">
                    <div class="form-group">
							<label>รหัสสินค้า</label>
							<input type="text" name="product_id" class="form-control" required>
						</div>
						<div class="form-group">
							<label>ชื่อสินค้า</label>
							<input type="text" name="product_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>รายละเอียดสินค้า</label>
							<input type="text" name="product_detail" class="form-control" required>
						</div>
						<div class="form-group">
							<label>วันผลิตสินค้า</label>
							<input type="date" class="form-control" name="product_date" required>
						</div>
						<div class="form-group">
							<label>ราคาสินค้า</label>
							<input type="text" class="form-control" name="product_price" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" name="Add" value="Add">
					</div>
				</form>
			</div>
		</div>
    </div>

    </div>
</body>
</html>