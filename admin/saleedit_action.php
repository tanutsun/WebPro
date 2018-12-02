<?php 

require_once(__DIR__ . "/libs/config.inc.php");
require_once(__DIR__ . "/libs/func.inc.php");
$SellID=$_REQUEST['Sell_ID'];
$Status =$_REQUEST['Status'];
$AllProduct=$_REQUEST['AllProduct'];
$Product_ID=$_REQUEST['Product_ID'];
$Product_Quantity=$_REQUEST['Product_Quantity'];


 $SumProduct= $Product_Quantity-$AllProduct;
echo $SumProduct;




$helper = new helperAdmin($db);

if (!$helper->checkLogin()) {
    $helper->redirectLogin();
    exit();

}

$productedit = $helper->ProductEdit($db,$SellID,$Status);
$productcountedit = $helper->ProductcountEdit($db,$Product_ID,$SumProduct);

header("Location:salelist.php")


 
?>

