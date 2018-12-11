<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
    <title> activity </title>
        <style>
           body {
               /* background-image: url("../../img/bg/bg.png"); */
               width: 100%;
           }
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

            .btn-read{
                background-color:grey;
                border-radius: 25px;
                color:black;
                font-size:20px;
            }

        </style>
    </head>
    <body >
       
        <font face="Supermarket">
            <nav class="navbar navbar-expand-sm bg-nav navbar-dark">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="../../index.php">
                    <img src="../../img/logo-nav.png" alt="logo" style="width:40px;">
                </a>        
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../module/product/product.php">ผลิตภัณฑ์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../module/plant/plant.php">พันธุ์พืช</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../../module/activity/activity.php">กิจกรรม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../module/map/map.php">แผนที่</a>
                    </li>
                </ul>
            </nav>

        <!--start activity-->
                <div class="container">
                <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
                     $con=mysqli_connect("localhost","root","","webpro");
                    $con->set_charset("utf8");
                    $sql="SELECT Activity_ID,Activity_Name,Activity_Detail,Activity_Pic,Activity_Date FROM Activity";                   
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                   $Activity_ID =$row['Activity_ID'];
                    $Activity_Name=$row['Activity_Name'];
                    $Activity_Detail=$row['Activity_Detail'];
                    $Activity_Pic =$row['Activity_Pic'];
                    $Activity_Date=$row['Activity_Date'];
                  
                 ?> 
                
                        <div class="row" style="padding-top:5%; padding-bottom: 5%; padding-bottom: 5%;">
                                <div class="col-sm">
                                 <img src="../../../<?php echo $Activity_Pic; ?>" style="width : 350px;  height: 280px;">
                               </div>
                               <div class="col-sm" style="padding-left:0px; padding-top: 65px;">
                                <b><h4> ชื่อกิจกรรม : <?php echo $Activity_Name;?>
                                 <br><br>
                                 รายละเอียดกิจกรรม :  <?php echo $Activity_Detail; ?>
                                 วันที่จัดกิจกรรม :  <?php echo $Activity_Date; ?>
                                 <br><br><br>
                                 <a class="btn btn-read" href="../detail.activity/detail1.php?Activity_ID=<?php echo $Activity_ID; ?>" role="button">อ่านเพิ่มเติม</a>
                                  </div>
                                 
                   
                       </div>
                       <?php
                 }
                    ?>

                  

                <!--start pageing number-->
                <!-- <nav aria-label="Page navigation example" style="padding-top:120px;"> 
                  <ul class="pagination justify-content-end">
                    
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                   
                   
                  </ul>
                </nav>  -->
                <!--end pageing number-->
        </div> 
        <!--end contrainer-->

        
        <footer style="margin-top: 6%;">
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

<!--script-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
    </body>
</html>