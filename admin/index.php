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


<form method="POST" action="">
    <h3>Login</h3>

    <?php 
        $helper->showMsg();
    ?>

    Username : <input type="text" name="username">
    <br>
    Password : <input type="password" name="password">
    <br>
    <input type="submit" name="submit" value="Login">

</form>