<?php 

require_once(__DIR__ . "/libs/config.inc.php");
require_once(__DIR__ . "/libs/func.inc.php");

$helper = new helperAdmin($db);

if(!$helper->checkLogin()){
    $helper->redirectLogin();
    exit();
}
$Orderalllist = $helper->OrderallPending($db);

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

        <h1>คำสั่งซื้อของสินค้าทั้งหมด</h2>
            <hr>
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr id="tablehead">
                        <th>ID</th>
                        <th>รายการสินค้า</th>
                        <th>จำนวนสินค้า</th>
                        <th>ยอดรวม</th>
                        <th>วันที่สั่ง</th>
                        <th>สถานะ</th>
                        <th>หมายเหตุ</th>
                    </tr>
                </thead>
                <tbody>
                <?php

while ($row = $Orderalllist->fetch()) {
    $SellID=$row['Sell_ID'];
    $ProductName=$row['Product_name'];
    $AllProduct=$row['All_Product'];
    $TotalPrice=$row['Total_Price'];
    $Address=$row['Address'] ;
    $SellDate=$row['Sell_Date'] ;
    $Status=$row['Status'];
    echo "<tr>";

    echo "<td>" .$SellID . "</td>";
    echo "<td>" .$ProductName . "</td>";
    echo "<td>" .$AllProduct . "</td>";
    echo "<td>" . $TotalPrice . " บาท" . "</td>";
   // echo "<td>" . $Address. "</td>";
    echo "<td>" . $SellDate . "</td>";
    echo "<td>" . $Status . "</td>";
    echo "<td>" . "<a href='saleview.php?ProductName=".$ProductName."&Sell_ID=" . $SellID ."&AllProduct=".$AllProduct."&Total_Price=".$TotalPrice."&Address=".$Address."&Sell_Date=".$SellDate."&Status=".$Status." ' class='fa fa-search'></a>" . "</td>";
    echo "</tr>";
}
?>
                </tbody>


            </table>
            <center>

                                        <a href="dashboard.php"><button class=" btn-lg btn-dark" type="button" style="margin-top:25px;" data-dismiss="modal">ย้อนกลับ</button></a>
</center>
    </div>
    
   
</body>

</html>