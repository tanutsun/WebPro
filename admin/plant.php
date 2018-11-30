<?php

require_once __DIR__ . "/../libs/config.inc.php";
require_once __DIR__ . "/../libs/admin/func.inc.php";

$helper = new helperAdmin($db);

if (!$helper->checkLogin()) {
    $helper->redirectLogin();
    exit();
}
$plant = $helper->PlantQuery($db);

if (isset($_POST['action']) && $_POST['action'] == 'deleteEntry') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    if ($id > 0) {
        $query = "DELETE FROM plant WHERE Plant_ID=" . $id . " LIMIT 1";
        $result = $db->query($query);
        echo 'ok';
    } else {
        echo 'err';
    }
    exit; // finish execution since we only need the "ok" or "err" answers from the server.
}

if (isset($_POST['Add'])) {
    $ID = $_POST['plant_id'];
    $name = $_POST['plant_name'];
    $detail = $_POST['plant_detail'];
    $date = $_POST['plant_date'];
    $q = "INSERT INTO `plant` (`Plant_ID`, `Plant_Name`, `Plant_Detail`, `Plant_Date`,`Plant_Pic`, `Admin_ID`,`Map_ID`)
     VALUES($ID, $name, $detail, $date, 'upload/images/image-not-found.png', 1,00)";
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
    <link href="../admin/assets/option/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../admin/assets/option/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../admin/assets/option/build/css/custom.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="../admin/assets/option/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admin/assets/option/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../admin/assets/option/build//js/custom.min.js"></script>

    <!-- edit css by tasto -->
    <link href="../admin/assets/css/home.css" rel="stylesheet">
    <!-- Datatable-->
    <script src="../admin/assets/option/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../admin/assets/option/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
         $(function(){
               $('#myTablee').DataTable();
            });
            var currentRow
            $(document).on('click','.deletedata',function(){
                var id = $(this).attr('value'); // Get the clicked id for deletion
                currentRow = $(this).closest('tr'); // Get a reference to the row that has the button we clicked
                console.log(id)
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
                <button class=" btn-lg btn-danger" type="submit" style="margin-top:25px;width: 12%" data-toggle="modal"
                        data-target="#myModal">LOGOUT</button>
                    <!--เมนูด้านขวา -->
                </ul>
            </nav>
        </div>
    </div>
    <div class="container" style="width:80%">

            <h1>พันธุ์พืชในสวยชุมชนบึงบัว</h2>
            <a href="<?php echo ROOT_URL . "/admin/insertplant.php" ?>" data-toggle="modal">
            <button class="btn-lg btn-success" type="submit" style="float:right">+เพิ่มสินค้า</button>
            </a>
            <hr>
    <table class="table table-bordered" id="myTablee">
        <thead>
        <tr id="tablehead">
            <th>รหัสต้นไม้</th>
            <th>ชื่อต้นไม้</th>
            <th>รายละเอียดต้นไม้</th>
            <th>วันที่</th>
            <th>รูปต้นไม้</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
             <?php
            while ($row = $plant->fetch()) {
                echo "<tr>";
                echo "<td>" . $row['Plant_ID'] . "</td>";
                echo "<td>" . $row['Plant_Name'] . "</td>";
                echo "<td>" . $row['Plant_Detail'] . "</td>";
                echo "<td>" . $row['Plant_Date'] . "</td>";
                echo "<td>" . "<img src=" . "../" . $row['Plant_Pic'] . " with='35px' height='35px'/" . "</td>";
                echo "<td>" . "<a href='editplant.php?id=".$row['Plant_ID']."'><button class='editdata'>Edit</button></a><button class='deletedata' value=" . $row['Plant_ID'] . ">Delete</button>" . "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
 <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="background-color: red; color: white;">
                <center>
                    <i class="fa fa-sign-out" style="font-size: 1000%;margin-top: 5%;"></i><br>
                    <h1>ทำการยืนยันเพื่อออกจากระบบ</h1><br>
                    <button class=" btn-lg btn-dark" type="button" style="margin-top:25px;width: 12%" data-dismiss="modal">ยกเลิก</button>
                    <a href="<?php echo ROOT_URL . "/admin/logout.php" ?>">
                        <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;width: 12%">ยืนยัน</button>
                    </a>
                </center>
            </div>

        </div>
    </div>


</body>

</html>