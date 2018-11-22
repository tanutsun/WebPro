<?php 

require_once(__DIR__ . "/../libs/config.inc.php");
require_once(__DIR__ . "/../libs/admin/func.inc.php");

$helper = new helperAdmin($db);

if(!$helper->checkLogin()){
    $helper->redirectLogin();
    exit();
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

    <script>
         $(function(){
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

            <h1>กิจกรรมชุมชนบึงบัว</h2>
            <a href="<?php echo ROOT_URL."/admin/insertevent.php" ?>">
            <button class=" btn-lg btn-success" type="submit" style="float:right">+เพิ่มบทความ</button>
            </a>
            <hr>
    <table class="table table-bordered" id="myTable">
        <thead>
        <tr id="tablehead">
            <th>ID</th>
            <th>ชื่อบทความ</th>
            <th>วันที่</th>
            <th>การจัดการ</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>00</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        <tr>
            <td>01</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        <tr>
            <td>02</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        <tr>
            <td>03</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        <tr>
            <td>04</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        <tr>
            <td>05</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        <tr>
            <td>06</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        <tr>
            <td>07</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        <tr>
            <td>08</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        <tr>
            <td>09</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        <tr>
            <td>10</td>
            <td>กิจกรรมน้ำยาล้างจาน</td>
            <td>27/02/40</td>
            <td>♥ ♥</td>
        </tr>
        </tbody>
        
        
    </table>
</div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="background-color: red; color: white;">
                <center>
                    <i class="fa fa-sign-out" style="font-size: 1000%;margin-top: 5%;"></i><br>
                    <h1>ทำการยืนยันเพื่อออกจากระบบ</h1><br>
                    <button class=" btn-lg btn-dark" type="button" style="margin-top:25px;width: 12%" data-dismiss="modal">ยกเลิก</button>
                    <a href="<?php echo ROOT_URL."/admin/logout.php" ?>">
                        <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;width: 12%">ยืนยัน</button>
                    </a>
                </center>
            </div>

        </div>
    </div>

</body>

</html>
