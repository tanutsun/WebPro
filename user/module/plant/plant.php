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
        .container-fluid .row {
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
        .btn-read{
            background-color:grey;
            border-radius: 25px;
            color:black;
            font-size:18px;
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
        <div class="container-fluid">
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
            <div class="row m-0 pt-5 pl-3 pr-3">
                <div class="col-sm pt-3">
                    <center><img class="plantImg" src="<?php echo ROOT_URL."/".$Plant_Pic?>" style="width:80%;height:350px;"></center>
                </div>
                <div class="col-sm pt-3">
                    <h5><b><?php echo $Plant_Name ?></b></h5>
                    <p class="plantDetail detail">
                        <?php
                            $showDetail = mb_substr($Plant_Detail, 0, 350)."...";
                            echo $showDetail;
                        ?>
                    </p><br>
                    <form action ="detailplant.php" method="get">
                        <a href="detailplant.php?Plant_ID=<?= $Plant_ID; ?>" class="btn btn-read">อ่านเพิ่มเติม</a>
                    </form>
                </div>
            </div>
        <?php } ?></div>
        </div><br><br>

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
                    <h6>fb : 
                    <a href="https://www.facebook.com/%E0%B8%A8%E0%B8%B9%E0%B8%99%E0%B8%A2%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%A3%E0%B8%B9%E0%B9%89%E0%B8%8A%E0%B8%B8%E0%B8%A1%E0%B8%8A%E0%B8%99%E0%B8%85%E0%B8%99%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87-%E0%B8%9A%E0%B8%B6%E0%B8%87%E0%B8%9A%E0%B8%B1%E0%B8%A7-978384328863562/" target="_blank">                    
                    ชุมชนบึงบัว
                    </a>
                    </h6>
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