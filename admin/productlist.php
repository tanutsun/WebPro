<?php 

require_once(__DIR__ . "/libs/config.inc.php");
require_once(__DIR__ . "/libs/func.inc.php");

$helper = new helperAdmin($db);

if (!$helper->checkLogin()) {
    $helper->redirectLogin();
    exit();

}
$productlist = $helper->ProductPending($db);
// Include database connection
// if (isset($_POST['rowid'])) {
//     $id = $_POST['rowid']; //escape string
//     echo $id;
//     // Run the Query
//     // Fetch Records
//     // Echo the data you want to show in modal\e
//     $modal = $helper->productmodal($db, $id);
// }
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

//         $(document).ready(function(){
//     $('#myModal2').on('show.bs.modal', function (e) {
//         var rowid = $(e.relatedTarget).data('id');
//         console.log(rowid , location.pathname)
//         $.ajax({
//             type : 'get',
//             url:location.pathname+'?id='+rowid, //Here you will fetch records 
//             data :  {'rowid':rowid}, //Pass $id
//             success : function(data){
//             $('.fetched-data').html(data);//Show fetched data from database
//             }
//         });
//      });
// });
$("#myModal2").on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);           
        var id = button.data('formid');
        //alert(id);        
        $.get(location.pathname+'id='+id,
            function(data) {
                console.log(data)
             $("#myModal2").html(data);   
                });
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

        <h1>รายการการสั่งสินค้า</h2>
            <hr>
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr id="tablehead">
                        <th>ID</th>
                        <!-- <th>รายการสินค้า</th> -->
                        <th>จำนวนสินค้า</th>
                          <th>จำนวนเงิน</th>
                        <th>ยอดรวม</th>
                        <th>วันที่สั่ง</th>
                        <th>สถานะ</th>
                        <th>ดูรายละเอียด</th>
                    </tr>
                </thead>
                <tbody>
                  <?php

                    while ($row = $productlist->fetch()) {
                        echo "<tr>";
                        echo "<td>" . $row['Sell_ID'] . "</td>";
                        echo "<td>" . $row['All_Product'] . "</td>";
                        echo "<td>" . $row['Total_Price'] . " บาท" . "</td>";
                        echo "<td>" . $row['Address'] . "</td>";
                        echo "<td>" . $row['Sell_Date'] . "</td>";
                        echo "<td>" . $row['Status'] . "</td>";
                        echo "<td>" . "<a class='btn btn-warning' data-toggle='modal' data-target='#myModal2' data-toggle='modal' data-target='#myModal2' " . "data-id=" . $row['Sell_ID'] . " " . " ><i class='fa fa-edit'></i></a>" . "</td>";
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
                    <a href="<?php echo ROOT_URL . "/admin/logout.php" ?>">
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
                        <h1>รายการการสั่งซื้อ</h1>
                        <hr style="color: black;width: 80%;">
                        <table class="table table-bordered" style="background-color:white;">
                                <thead>
                                    <tr id="tablehead" style="background-color:white;">
                                        <th>รายการสินค้า</th>
                                        <th>ชื่อสินค้า</th>
                                        <th>จำนวนสินค้า</th>
                                    </tr>
                                </thead>
                                <tbody>
                    <?php 
                    if (isset($_REQUEST['id'])) {

                        $id = $_REQUEST['id'];
                        echo $id;
                        // while ($row = $modal->fetch()) {
                            //     echo "<tr>";
                            //     echo "<td>" . $row['Sell_ID'] . "</td>";
                            //     echo "<td>" . $row['All_Product'] . "</td>";
                            //     echo "<td>" . $row['Total_Price'] . " บาท" . "</td>";
                            //     echo "</tr>";
                            // }
                    }
                    ?>
                            //  <?php 

                            // while ($row = $modal->fetch()) {
                            //     echo "<tr>";
                            //     echo "<td>" . $row['Sell_ID'] . "</td>";
                            //     echo "<td>" . $row['All_Product'] . "</td>";
                            //     echo "<td>" . $row['Total_Price'] . " บาท" . "</td>";
                            //     echo "</tr>";
                            // }
                            // ?>
                                </tbody>
                
                
                            </table>
                        <button class=" btn-lg btn-dark" type="button" style="margin-top:25px;" data-dismiss="modal">ยังไม่ได้ส่งสินค้า</button>
                        <a href="">
                            <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">จัดส่งสินค้าแล้ว</button>
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