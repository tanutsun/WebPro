<?php

require_once __DIR__ . "/../libs/config.inc.php";
require_once __DIR__ . "/../libs/admin/func.inc.php";

$helper = new helperAdmin($db);

if (!$helper->checkLogin()) {
    $helper->redirectLogin();
    exit();
}
$plant = $helper->PlantQuery($db)
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
                $('#myTable').dataTable({ select: true});
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
                    <!--เมนูด้านขวา -->
                </ul>
            </nav>
        </div>
    </div>
    <div class="container" style="width:80%">

            <h1>พันธุ์พืชในสวยชุมชนบึงบัว</h2>
            <a href="">
            <button class=" btn-lg btn-success" type="submit" style="float:right">+เพิ่มบทความ</button>
            </a>
            <hr>
    <table class="table table-bordered" id="myTable">
        <thead>
        <tr id="tablehead">
            <th>รหัสต้นไม้</th>
            <th>ชื่อต้นไม้</th>
            <th>รายละเอียดต้นไม้</th>
            <th>วันที่</th>
            <th>รูปต้นไม้</th>
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
    echo "<td>" . "<img src=" . $row['Plant_Pic'] . " />" . "</td>";
    echo "</tr>";
}
?>
        </tbody>


    </table>
</div>
</body>

</html>