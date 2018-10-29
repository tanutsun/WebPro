<?php 

require_once(__DIR__ . "/../libs/config.inc.php");
require_once(__DIR__ . "/../libs/admin/func.inc.php");

$helper = new helperAdmin($db);


if($helper->checkLogin()){
    $helper->redirectDashboard();
    exit();
}

if(isset($_POST['submit']) && $_POST['submit'] == "Login"){

    if(isset($_POST['username']) && isset($_POST['password'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $helper->doLogin($username, $password);

        
    }else{
        $helper->setMsg("error", "โปรดกรอก Username");
    }
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
    <link href="../admin/assets/css/login.css" rel="stylesheet">
</head>

<body class="backgroud body">
    <div class="picture">
        <center>
            <img src="../admin/assets/images/login.png" style="width:320px;margin-bottom: 2%;margin-top: 5%; ">
            <p style="font-size:150%">ADMIN ชุมชนบึงบัว</p>
        </center>
    </div>
    <form class="" method="POST" action="">
            <?php 
                $helper->showMsg(); //เพิ่ม pop up login ผิดด้วย
            ?>
        <div class="form-group">
            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="username" style="text-align:right; padding:8px;font-size: 120%;">
                USERNAME :
            </label>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <input type="text" name="username" class="form-control" required="" autofocus="" style="border-radius:10px;width: 85%">
            </div>
        </div>
        <br><br><br>
        <div class="form-group">
            <label class="control-label col-md-5 col-sm-5 col-xs-12" for="password" style="text-align:right; padding:8px;font-size: 120%;">
                PASSWORD :
            </label>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <input type="password" name="password" class="form-control" required="" autofocus="" style="border-radius:10px;width: 85%">
            </div>
        </div>
        <br><br>
        <center>
            <a href="#">
                <button class=" btn-lg btn-success btn-block" type="submit" name="submit" value="Login" style="margin-top:10px;width: 12%">LOGIN</button>
            </a>
        </center>
    </form>
</body>

</html>


<!-- <form method="POST" action="">
    <h3>Login</h3>

    // <?php 
    //     $helper->showMsg();
    // ?>

    Username : <input type="text" name="username">
    <br>
    Password : <input type="password" name="password">
    <br>
    <input type="submit" name="submit" value="Login">

</form> -->