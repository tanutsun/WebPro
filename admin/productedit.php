<?php 

require_once(__DIR__ . "/libs/config.inc.php");
require_once(__DIR__ . "/libs/func.inc.php");

$sell_ID=$_REQUEST['Sell_ID'];
$AllProduct=$_REQUEST['AllProduct'];
$ToTalPrice=$_REQUEST['Total_Price'];
$Address=$_REQUEST['Address'];
$SellDate=$_REQUEST['Sell_Date'];
$Status =$_REQUEST['Status'];
$ProductName =$_REQUEST['ProductName'];

?>

<!DOCTYPE html>
<html>
<div class="modal-content" >
                    <center>
                           
                        <h1>เลขที่ใบสั่งซื้อหมายเลข  <?php echo $sell_ID;?></h1>
                        <hr style="color: black;width: 80%;">
                        <table class="table table-bordered" style="background-color:white;">
                                <thead>
                                    <tr id="tablehead" style="background-color:white;">
                                        <th>รายการสินค้า</th>
                                        <th>ชื่อสินค้า</th>
                                        <th>จำนวนสินค้า</th>
                                        <th>ราคารวม</th>
                                    </tr>

                                     <tr id="table" style="background-color:white;">
                                        <th>1</th>
                                        <th><?php echo $ProductName ;?></th>
                                        <th><?php echo $AllProduct;?></th>
                                        <th><?php echo $ToTalPrice;?></th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                </tbody>
                
                
                            </table>
                        <a href="productlist.php"><button class=" btn-lg btn-dark" type="button" style="margin-top:25px;" data-dismiss="modal">ยังไม่ได้ส่งสินค้า</button></a>
                        <a href='productedit_action.php?Sell_ID="<?php echo $sell_ID; ?>"&Status="success"'>
                            <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">จัดส่งสินค้าแล้ว</button>
                        </a>
                    </center>
                </div>
    
</html>