<?php 

require_once(__DIR__ . "/libs/config.inc.php");
require_once(__DIR__ . "/libs/func.inc.php");

$helper = new helperAdmin($db);

if(!$helper->checkLogin()){
    $helper->redirectLogin();
    exit();
}
$Productalllist = $helper->ProductallPending($db);
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
            <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" style = "float:right">
                <option value="<?php echo ROOT_URL."/admin/productall.php" ?>">ผลิตภัณ์</option>    
                <option value="<?php echo ROOT_URL."/admin/plantall.php" ?>">พันธุ์พืช</option>
            </select>
            <hr>
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr id="tablehead">
                        <th>ID</th>
                        <th>รายการสินค้า</th>
                        <th>จำนวนสินค้าคงเหลือ</th>
                        <th>แก้ไขจำนวนสินค้า</th>
                    </tr>
                </thead>
                <tbody>
                <?php

while ($row = $Productalllist->fetch()) {
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
    echo "<td>" . "<a href='productedit.php?ProductName=".$ProductName."&Sell_ID=" . $SellID ."&AllProduct=".$AllProduct."&Total_Price=".$TotalPrice."&Address=".$Address."&Sell_Date=".$SellDate."&Status=".$Status." ' class='fa fa-edit'></a>" . "</td>";
    echo "</tr>";
}
?>
                </tbody>


            </table>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="background-color: red; color: white;">
                <center>
                    <i class="fa fa-sign-out" style="font-size: 1000%;margin-top: 5%;"></i>
                    <h1>ทำการยืนยันเพื่อออกจากระบบ</h1>
                    <button class=" btn-lg btn-dark" type="button" style="margin-top:25px;width: 12%" data-dismiss="modal">ยกเลิก</button>
                    <a href="<?php echo ROOT_URL."/admin/logout.php" ?>">
                        <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;width: 12%" >ยืนยัน</button>
                    </a>
                </center>
            </div>

        </div>
    </div>
    <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">
    
                <!-- Modal content-->
                <div class="modal-content" >
                    <center>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h1>แก้ไขจำนวนสินค้า</h1>
                        <hr style="color: black;width: 80%;">
                        <input type="text">
                        <br>
                        <a href="">
                            <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">ยืนยันการแก้ไข</button>
                        </a>
                    </center>
                </div>
    
            </div>
        </div>
        <div id="myModal3" class="modal fade" role="dialog">
                <div class="modal-dialog">
        
                    <!-- Modal content-->
                    <div class="modal-content" style="background-color: black; color: white;">
                        <center>
                                <div class="picture">
                                        <center>
                                            <img src="../../admin/assets/images/login.png" style="width:320px;margin-bottom: 2%;margin-top: 5%; ">
                                        </center>
                                    </div>
                            <h1>คุณต้องการทำการแก้สถานะใช่ไหม</h1><br>
                            <button class=" btn-lg btn-dark" type="button" style="margin-top:25px;width: 12%" data-dismiss="modal">ยกเลิก</button>
                            <a href="">
                                <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;width: 12%">ยืนยัน</button>
                            </a>
                        </center>
                    </div>
        
                </div>
            </div>



</body>

</html>