<?php 

require_once(__DIR__ . "/libs/config.inc.php");
require_once(__DIR__ . "/libs/func.inc.php");

$helper = new helperAdmin($db);

if(!$helper->checkLogin()){
    $helper->redirectLogin();
    exit();
}
$productall = $helper->SellPending($db);
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
    <!-- Font Awesome -->
    <link href="../admin/assets/option/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- jQuery -->
    <script src="../admin/assets/option/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admin/assets/option/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Datatable-->
    <script src="../admin/assets/option/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../admin/assets/option/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(function () {
            $('#myTable').dataTable();
        });
    </script>

    <link rel="stylesheet" href="../admin/assets/css/event.css">
</head>

<body>
    <div class="top_nav">
        <div class="nav_menu">
            <nav class="">
                <a href="<?php echo ROOT_URL."/admin/dashboard.php" ?>">
                    <img src="../admin/assets/images/navbar.png" style="margin-left: 1%;">
                </a>
                <ul class="nav navbar-nav navbar-right">
                    <button class=" btn-lg btn-danger" type="submit" style="margin-top:25px;width: 12%" data-toggle="modal"
                        data-target="#myModal">LOGOUT</button>
                    <!--เมนูด้านขวา -->
                </ul>
            </nav>
        </div>
    </div>
    <div class="container" style="width:80%">

        <h1>จำนวนสินค้าทั้งหมด</h2>
            
            <hr>
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr id="tablehead">
                        <th>ID</th>
                        <th>รายการสินค้า</th>
                        <th>จำนวนสินค้าคงเหลือ</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php

while ($row = $productall->fetch()) {
    $ProductID=$row['Product_ID'];
    $ProductName=$row['Product_Name'];
    $ProductQuantity=$row['Product_Quantity'];

    echo "<tr>";

    echo "<td>" .$ProductID. "</td>";
    echo "<td>" .$ProductName . "</td>";
    echo "<td>" .$ProductQuantity . "</td>";
  
    echo "</tr>";
}
?>
                
                </tbody>


            </table>
    </div>
    <!-- Modal -->
    
   



</body>

</html>