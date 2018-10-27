<?php 

require_once(__DIR__ . "/../libs/config.inc.php");
require_once(__DIR__ . "/../libs/admin/func.inc.php");

$helper = new helperAdmin($db);

if(!$helper->checkLogin()){
    $helper->redirectLogin();
    exit();
}
?>

<h2>Hear is Dashboard</h2>

<?php 
    $helper->showMsg();
?>


<p><a href="<?php echo ROOT_URL."/admin/logout.php" ?>">Logout</a></p>