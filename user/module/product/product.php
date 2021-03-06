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
            p {
                font-size: 28px;
            }
        </style>
    </head>
    <body>
        <font face="Supermarket">   
        <nav class="navbar navbar-expand-sm bg-nav navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="\webpro\user\index.php">
                <img src="../../img/logo-nav.png" alt="logo" style="width:40px;">
            </a>        
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="\webpro\user\module\product\product.php" > ผลิตภัณฑ์ </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\webpro\user\module\plant\plant.php">พันธุ์พืช</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="\webpro\user\module\activity\activity.php">กิจกรรม</a>
                </li>
         
                <li class="nav-item">
                    <a class="nav-link" href="\webpro\user\module\map\map.php">แผนที่</a>
                </li>
            </ul>
        </nav>

        

       <div class="container-fluid">
 
            <div class="row m-0 pt-5">
           <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            $con = mysqli_connect("localhost", "root", "", "webpro");
            $con->set_charset("utf8");
            $sql = "SELECT Product_ID,Product_Name,Product_Pic FROM product ";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $Product_ID = $row['Product_ID'];
                $Product_Name = $row['Product_Name'];
                $Product_Pic = $row['Product_Pic'];

                ?> 

                <div class="col-sm-4">
                    <div class="row m-0">
                        <div class="col-sm-12">
                            <img src="../../../<?php echo $Product_Pic; ?>" style="width:100%;  height:250px;">
                        </div>
                        <div class="col-sm-12 pt-3">
                            <a href="detailproduct.php?Product_ID=<?php echo $Product_ID; ?>"><p class="text-center"><?php echo $Product_Name; ?></p></a>
                        </div>
                    </div>          
                </div>
               <?php

            }
            ?>
                
            </div>

            
         
            <!-- <nav aria-label="Page navigation example" style="padding-top:120px;">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav> -->

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
                    <h6>fb : 
                    <a href="https://www.facebook.com/%E0%B8%A8%E0%B8%B9%E0%B8%99%E0%B8%A2%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%A3%E0%B8%B9%E0%B9%89%E0%B8%8A%E0%B8%B8%E0%B8%A1%E0%B8%8A%E0%B8%99%E0%B8%85%E0%B8%99%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87-%E0%B8%9A%E0%B8%B6%E0%B8%87%E0%B8%9A%E0%B8%B1%E0%B8%A7-978384328863562/" target="_blank">                    
                    ชุมชนบึงบัว
                    </a>
                    </h6>
                </div>
            </div>
        </footer>     
    </font>

    </body>
</html>