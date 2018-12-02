<?php 

require_once(__DIR__ . "/libs/config.inc.php");
require_once(__DIR__ . "/libs/func.inc.php");
$SellID=$_REQUEST['Sell_ID'];
$Status =$_REQUEST['Status'];


$helper = new helperAdmin($db);

if (!$helper->checkLogin()) {
    $helper->redirectLogin();
    exit();

}
$productedit = $helper->ProductEdit($db,$SellID,$Status);
header("location:productlist.php")

 
?>

