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

                                     <tr id="table" style="background-color:white;">
                                        <th>1</th>
                                        <th><?php echo $ProductName;?></th>
                                        <th><?php echo $AllProduct;?></th>
                                        <th><?php echo $ToTalPrice;?></th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                </tbody>
                
                
                            </table>
                            <a href="orderall.php"><button class=" btn-lg btn-dark" type="button" style="margin-top:25px;" data-dismiss="modal">ย้อนกลับ</button></a>
                          
    </center>
    </div>
   
              
        

</body>

</html>