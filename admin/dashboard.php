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
    <link href="../admin/assets/option/vendors//bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../admin/assets/option/build/css/custom.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="../admin/assets/option/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admin/assets/option/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

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
                    <a href="<?php echo ROOT_URL."/admin/logout.php" ?>">
                        <button class=" btn-lg btn-danger" type="submit" style="margin-top:25px;width: 12%">LOGOUT</button>
                    </a>
                    <!--เมนูด้านขวา -->
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 style="margin:2%;">ประเภทของบทความ</h1>
        <hr style="color: black;width: 80%;">
        <a href="<?php echo ROOT_URL."/admin/event.php" ?>">กิจกรรมชุมชนบึงบัว</a>
        <a href="<?php echo ROOT_URL."/admin/product.php" ?>">ผลิตภัณฑ์ชุมชนบึงบัว</a>
        <a href="<?php echo ROOT_URL."/admin/plant.php" ?>">พันธุ์พืชในสวนชุมชนบึงบัว</a>
        <a href="<?php echo ROOT_URL."/admin/productprocess.php" ?>">กระบวนการทำผลิตภัณฑ์ของชุมชนบึงบัว</a>
    </div>
</body>

</html>


<!-- <h2>Hear is Dashboard</h2>

<?php 
  //  $helper->showMsg();
?>


<p><a href="<?php echo ROOT_URL."/admin/logout.php" ?>">Logout</a></p> -->