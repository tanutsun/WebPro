
<?php 
require_once(__DIR__ . "../../../../../libs/config.inc.php");
$ID = $_GET["Product_ID"];
?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--pagination-->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <title> บึงบัว </title>
        <style>

            .font {
                 font-family: 'Supermarket';
            }

            @font-face {
                font-family: 'Supermarket';
                src: url('../../font/Supermarket/supermarket.ttf');
                src: local('Souses Regular'), local('Supermarket Web'),
                url("../../font/Supermarket/supermarket.woff") format("woff"),
                url("../../font/Supermarket/supermarket.otf") format("opentype"),
                url("../../font/Supermarket/supermarket.svg#grablau") format("svg");
            }

            .bg-nav{
                background-color:#215732;
            }

            footer{
                background-color:#215732;
                height:10%;
                margin: 0px;
                padding: 10px; 
                color: white;
            }

            .fa-facebook{
                font-size:14px;
                color:white
            }

            .btn-sub{
                background-color:#FF9C2C;
                border-radius: 25px;
                color:whitesmoke;
            }
            .btn-back{
                background-color:#2054FF;
                border-radius: 25px;
                color:whitesmoke;
            }

        </style>
    </head>
    <body>
        <font face="Supermarket">   
        <nav class="navbar navbar-expand-sm bg-nav navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="\webpro\template\front\index.php">
                <img src="../../img/logo-nav.png" alt="logo" style="width:40px;">
            </a>        
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="\webpro\template\front\module\product\product.php" > ผลิตภัณฑ์ </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\webpro\template\front\module\plan\plan.php">พันธุ์พืช</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="\webpro\template\front\module\activity\activity.php">กิจกรรม</a>
                </li>
         
                <li class="nav-item">
                    <a class="nav-link" href="\webpro\template\front\module\map\map.php">แผนที่</a>
                </li>
            </ul>
        </nav>

         <?php 
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
                    $con=mysqli_connect("localhost","root","","webpro");
                    $con->set_charset("utf8");
                    $sql="SELECT Product_ID, Product_Name, Product_Detail,Product_Price, Product_Pic  FROM product  where Product_ID= $ID ";
                    
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                    $Product_ID =$row['Product_ID'];
                    $Product_Name=$row['Product_Name'];
                    $Product_Detail=$row['Product_Detail'];
                    $Product_Price=$row['Product_Price'];
                    $Product_Pic =$row['Product_Pic'];
               

                  

                    ?>

        <div class="container-fluid">

            <div class="row pt-5 pb-5">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                        <center><img src="<?php echo ROOT_URL."/".$Product_Pic;?>" style="width:90%; height:450px;"></center>
                       
                        </div>
                        <div class="col-sm-10 offset-sm-1 pt-3">
                            <h5 class="text-center"> <?php echo $Product_Name; ?> </h5>
                            <p><?php echo $Product_Detail;?>
                            </p>
                            <p> ราคาสินค้า : <?php echo $Product_Price ; ?> บาท </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="row" >
                        <div class="col-sm-10 p-3" style="background-color:#F8F8F8;">
                            <form>
                                <div class="form-group">
                                    <label for="FormControlSelect1"> จำนวนที่ต้องการซื้อ </label>
                                    <select class="form-control" id="FormControlSelect1" style="width:20%">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                  </div> 
                                ช่องทางการชำระเงิน:
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">PromptPay</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Paypal</label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="comment">ที่อยู่ในการจัดส่ง</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div> 
                                <center>
                                    <button id="showModal" class="btn btn-sub" type="button" data-toggle="modal" data-target="#buyPlant">ซื้อสินค้า</button>
                                    <div class="modal fade modal-fullscreen " id="buyPlant" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title w-100 text-center">ยืนยันรายละเอียดสินค้า</h3>
                                                    <button type="button" class="close" data-dismiss="modal">&timesb;</button>
                                                </div>
                                                <div class="modal-body ">
                                                    <center>
                                                        <table style="align-self: auto">
                                                            <tr>
                                                                <td><label>ราคาต่อชิ้น : </label></td>
                                                                <td><label id="price">150</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td><label>จำนวนที่ต้องการซื้อ : </label></td>
                                                                <td><label id="totalPlant">2</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td><label>ราคารวม : </label></td>
                                                                <td><label id="totalPrice">300</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td><label id="payment">ชำระเงินผ่านทาง Paypal</label></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><center><input class="btn btn-sub" type="submit" value="ยืนยัน"></center></td>
                                                            </tr>
                                                        </table>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </center>                       
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>
            <center>
                <a href="product.php" class="btn btn-back">กลับสู่หน้าผลิตภัณฑ์</a>
            </center>

            <br>

        </div>

            <footer>
                    <div class="row">
                        <div class="col-2">
                            <h2> Contact Us </h2>
                        </div>
                        <div class="col-2">
                            <h6> ลำปลาทิว ลาดกระบัง กรุงเทพมหานคร  โทร 089 035 6498</h6>
                        </div>
                        <div class="col-8">
                            <h6>fb : ชุมชนบึงบัว</h6>
                        </div>
                    </div>
                </footer>     
            </font>
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

            </body>
        </html>