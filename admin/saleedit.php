<?php 

require_once(__DIR__ . "/libs/config.inc.php");
require_once(__DIR__ . "/libs/func.inc.php");

$helper = new helperAdmin($db);

if (!$helper->checkLogin()) {
    $helper->redirectLogin();
    exit();

}
$sell_ID=$_REQUEST['Sell_ID'];
$AllProduct=$_REQUEST['AllProduct'];
$ToTalPrice=$_REQUEST['Total_Price'];
$Address=$_REQUEST['Address'];
$SellDate=$_REQUEST['Sell_Date'];
$Status =$_REQUEST['Status'];
$ProductName =$_REQUEST['ProductName'];
$Product_ID=$_REQUEST['Product_ID'];
$Product_Quantity=$_REQUEST['Product_Quantity'];

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
                <a href="<?php echo ROOT_URL . "/admin/dashboard.php" ?>">
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
        <center>
        <h1>เลขที่ใบสั่งซื้อหมายเลข  <?php echo $sell_ID;?></h1>
        <h3>ที่อยู่จัดส่ง :<?php echo $Address ; ?> </h3>
                        <hr style="color: black;width: 80%;">
                        <table class="table table-bordered" style="background-color:white;">
                                <thead>
                                    <tr id="tablehead" style="background-color:white;">
                                        <th>รายการสินค้า</th>
                                        <th>ชื่อสินค้า</th>
                                        <th>จำนวนสินค้า</th>
                                        <th>ราคารวม</th>
                                    </tr>

                                    
                                </thead>
                                <tbody>
                                
                                <tr id="table" style="background-color:white;">
                                        <th>1</th>
                                        <th><?php echo $ProductName ;?></th>
                                        <th><?php echo $AllProduct;?></th>
                                        <th><?php echo $ToTalPrice;?></th>
                                    </tr>
                                </tbody>
                
                
                            </table>
                            <a href="salelist.php"><button class=" btn-lg btn-dark" type="button" style="margin-top:25px;" data-dismiss="modal">ยังไม่ได้ส่งสินค้า</button></a>
                            <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;"  data-toggle="modal" data-target="#myModal3">จัดส่งสินค้าแล้ว</button>
    </center>
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
                    <a href="<?php echo ROOT_URL . "/admin/logout.php" ?>">
                        <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;width: 12%" >ยืนยัน</button>
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
                                            <img src="../admin/assets/images/login.png" style="width:320px;margin-bottom: 2%;margin-top: 5%; ">
                                        </center>
                                    </div>
                            <h1>คุณต้องการทำการแก้สถานะใช่ไหม</h1><br>
                            <button class=" btn-lg btn-dark" type="button" style="margin-top:25px;width: 12%" data-dismiss="modal">ยกเลิก</button>
                            <a href='saleedit_action.php?Sell_ID=<?php echo $sell_ID; ?>&AllProduct=<?php echo $AllProduct;?>&Product_Quantity=<?php echo $Product_Quantity ;?>&Product_ID=<?php echo $Product_ID;?>&Status="success"'>
                            <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;"  >จัดส่งสินค้าแล้ว</button>
                        </a>
                        </center>
                    </div>
        
                </div>
            </div>

</body>

</html>