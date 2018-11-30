<?php 

require_once(__DIR__ . "/libs/config.inc.php");
require_once(__DIR__ . "/libs/func.inc.php");

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
</head>

<body class="body backgroud">
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
    <!-- <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 style="margin:2%;">ประเภทของบทความ</h1>
        <hr style="color: black;width: 80%;">
        <button class="btn-default"><a href="<?php echo ROOT_URL."/admin/event.php" ?>">กิจกรรมชุมชนบึงบัว</a></button>
        <button class="btn-primary" ><a href="<?php echo ROOT_URL."/admin/product.php" ?>">ผลิตภัณฑ์ชุมชนบึงบัว</a></button>
        <button class="btn-success"><a href="<?php echo ROOT_URL."/admin/plant.php" ?>">พันธุ์พืชในสวนชุมชนบึงบัว</a></button>
        <button class="btn-info" ><a href="<?php echo ROOT_URL."/admin/productprocess.php" ?>">กระบวนการทำผลิตภัณฑ์ของชุมชนบึงบัว</a></button>
    </div> -->

    <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 style="margin:2%;">ประเภทของบทความ</h1>
        <hr style="color: black;width: 80%;">
    </div>
    <div>
        <center>
            <a href="<?php echo ROOT_URL."/admin/event.php" ?>">
                <img src="../admin/assets/images/event.png" width="250px" height="250px" style="margin-right:25%"></a>
            <a href="<?php echo ROOT_URL."/admin/product.php" ?>">
                <img src="../admin/assets/images/product.png" width="250px" height="250px"></a>
        </center>
    </div>
    <div>
        <center>
            <a href="<?php echo ROOT_URL."/admin/plant.php" ?>">
                <img src="../admin/assets/images/plant.png" width="250px" height="250px" style=" margin-top:5%;"></a>
            <!-- <a href="<?php echo ROOT_URL."/admin/productprocess.php" ?>">
                <img src="../admin/assets/images/productprocess.png" width="250px" height="250px" style=" margin-top:5%;"></a> -->
        </center>
    </div>
    <br><br><br>

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
                        <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;width: 12%">ยืนยัน</button>
                    </a>
                </center>
            </div>

        </div>
    </div>

</body>

</html>


<!-- <h2>Hear is Dashboard</h2>

<?php 
  //  $helper->showMsg();
?>


<p><a href="<?php echo ROOT_URL."/admin/logout.php" ?>">Logout</a></p> -->