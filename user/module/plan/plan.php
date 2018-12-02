<?php 
require_once(__DIR__ . "/../../libs/config.inc.php");
?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
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
            
            .container .row {
                padding-top: 5%;
            }
            .col-sm .plantDetail{
                padding-left: auto;
            }
            .plantImg {
                display: grid;
                width: auto;
                height: 250px;
            }
            h5 {
                padding-top: 1.5em;
            }
            .detail {
                font-size: large;
                text-indent: 1.8em;
            }
            .more {
                display: none;
            }
        </style>
</head>

<body>
    <font face="Supermarket">
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-sm bg-nav navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="/webpro/user/index.php">
                <img src="../../img/logo-nav.png" alt="logo" style="width:40px;">
            </a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/webpro/user/module/product/product.php">ผลิตภัณฑ์</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="plant.php">พันธุ์พืช</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/webpro/user/module/activity/activity.php">กิจกรรม</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="/webpro/user/module/map/map.php">แผนที่</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="container">
        <?php 
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
                    $con=mysqli_connect("localhost","root","","webpro");
                    $con->set_charset("utf8");
                    $sql="SELECT Plant_ID,Plant_Name,Plant_Pic,Plant_Detail  FROM plant ";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                     $Plant_ID =$row['Plant_ID'];
                    $Plant_Name=$row['Plant_Name'];
                    $Plant_Pic=$row['Plant_Pic'];
                    $Plant_Detail=$row['Plant_Detail'];

                   
                    ?>
            <div class="row">
                <div class="col-sm-12">
                    <img class="plantImg" src="<?php echo ROOT_URL."/".$Plant_Pic?>">
                </div>

                <form action ="detailplant.php" method="get">
                <div class="col-sm">
                    <h5><b><?php echo $Plant_Name ?></b></h5>
                    <p class="plantDetail detail">
                        <?php  echo $Plant_Detail ?>
                        <span class="more">ใบค่อนข้างแข็งมีขอบใบเรียบ ซึ่งเราสามารถนำใบเตยมาใช้ได้ทั้งใบสดและใบแห้ง ในใบเตยจะมีกลิ่นหอมของน้ำมันหอมระเหย (Fragrant Screw Pine) โดยกลิ่นหอมของใบเตยนั้นมากจากสารเคมีที่ชื่อว่า 2-acetyl-1-pyrroline ซึ่งเป็นกลิ่นเดียวกันกับที่ได้ใน ข้าวหอมมะลิ ขนมปังขาว และดอกชมนาด</span> 
                    </p>
                    <a href="detailplan.php?Plant_ID=<?= $Plant_ID; ?>">อ่านเพิ่มเติม</a>
                    <br><br>
                    <img src="../../img/locationPin.png" data-toggle="modal" data-target="#modalMiniMap_1" >
                    <div class="modal fade modal-fullscreen " id="modalMiniMap_1" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&timesb;</button>
                                </div>
                            
                                <div class="modal-body ">
                                  
                                  
        <div id="googleMap"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.3984763828053!2d100.7845000143117!3d
        13.753617300958133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc6b9b41bb0e0664!2z4Lio4Li54LiZ4
        Lii4LmM4LiB4Liy4Lij4LmA4Lij4Li14Lii4LiZ4Lij4Li54LmJ4LiE4LiZ4LmA4Lih4Li34Lit4LiHIOC4muC4tuC4h-C4muC4seC4pw!5e
        1!3m2!1sth!2sth!4v1540799335281" width="70%" height="70%" frameborder="0" style="border:0" ></iframe> 
    
        </form>
        <script>
            function myMap() {
                var mapProp = {
                    center: new google.maps.LatLng(13.754784, 100.786722),
                    zoom: 5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            }
        </script>
    
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div><?php } ?>
           

            <!--Pagination-->
            <nav aria-label="Page navigation example" style="padding-top:120px;">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-2">
                    <h2> Contact Us </h2>
                </div>
                <div class="col-2">
                    <h6> ลำปลาทิว ลาดกระบัง กรุงเทพมหานคร โทร 089 035 6498</h6>
                </div>
                <div class="col-8">
                    <h6>fb : ชุมชนบึงบัว</h6>
                </div>
            </div>
        </footer>
    </font>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>

</body>

</html>