<?php 
require_once(__DIR__ . "../../../../../libs/config.inc.php");
?>
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
            .font {
                 font-family: 'Supermarket';
            }

            @font-face {
                font-family: 'Supermarket';
                src: url('../font/supermarket.ttf');
                src: local('Souses Regular'), local('Supermarket Web'),
                url("../font/supermarket.woff") format("woff"),
                url("../font/supermarket.otf") format("opentype"),
                url("../font/supermarket.svg#grablau") format("svg");
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

        </style>
    </head>
    <body>
        <font face="Supermarket">   
        <nav class="navbar navbar-expand-sm bg-nav navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
                <img src="../../img/logo-nav.png" alt="logo" style="width:40px;">
            </a>        
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ผลิตภัณฑ์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">พันธุ์พืช</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">กิจกรรม</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">กระบวนการ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">แผนที่</a>
                </li>
            </ul>
        </nav> <!--end navbar-->

        <!--start activity-->
                <div class="container">
                <?php 
                    $con=mysqli_connect("localhost","root","","webpro");
                    $sql="SELECT Activity_Pic,Activity_Name,Activity_Detail,Activity_Date  FROM activity ";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                   echo $Activity_Pic=$row['Activity_Pic'];
                   echo $Activity_Name=$row['Activity_Name'];
                   echo $Activity_Date=$row['Activity_Date'];
                   echo $Activity_Detale=$row['Activity_Detail'];?>
                   <div class="row" style="padding-top:5%; padding-bottom: 5%; padding-bottom: 5%;">   
                   <div class="col-sm">
                    <img src="<?php echo ROOT_URL ."/".$Activity_Pic ?>"" style="width : 350px;  height: 280px;">
                    </div>
                  <div class="col-sm" style="padding-left:0px; padding-top: 65px;">
                   <b><h4> ชื่อกิจกรรม :  <?php echo $Activity_Name?>
                    <br>
                    รายละเอียดกิจกรรม :  <?php echo $Activity_Detale?>
                    <br>
                    จัดกิจกรรมในวันที่ : <?php echo $Activity_Date?>
                    <br> 
                    <br><br>
                    <h5><a href="../detail.activity/detail1.html">อ่านเพิ่มเติม</a></h5>
                  </div>
                    </div><hr>

                    <?php } ?>
                    

                
                    

                       
                     

                <!--start pageing number-->
                <nav aria-label="Page navigation example" style="padding-top:120px;"> 
                  <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav> <!--end pageing number-->
        </div> <!--end cintrainer-->


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

<!--script-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
    </body>
</html>