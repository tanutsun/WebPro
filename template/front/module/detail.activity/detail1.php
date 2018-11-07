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
      
    <title> Detail Activity </title>
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
        </nav>

        <!--stat detail activity-->
            <div class="container" style="padding-bottom: 20%;">
            <?php 
                    $con=mysqli_connect("localhost","root","","webpro");
                    $sql="SELECT Activity_Pic,Activity_Name,Activity_Date,Activity_Detail  FROM activity ";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                   echo $Activity_Pic=$row['Activity_Pic'];
                   echo $Activity_Name=$row['Activity_Name'];
                   echo $Activity_Date=$row['Activity_Date'];
                   echo $Activity_Detail=$row['Activity_Detail'];?>
				<center>
       			 <img src="<?php echo ROOT_URL."/".$Activity_Pic?>" style="width:550px; height:450px; padding-top:7%;">
        		 <br><br>
        			<h2><b><?php echo $Activity_Name ?></b></h2>
                </center>
                <br>
    				<h3 style="padding-top:5%"><b>รายละเอียดกิจกรรม</b></h3><hr>
    				<h5> <?php echo $Activity_Detail ?>
                    <br>- ได้จัดทำขึ้นในวันที่ 23 ตุลาคม 2561 ณ.ชุมชนบึงบัว
                    <br>- ตั้งเเต่เวลา 9.00-12.00 
                    <br>## งานนี้ฟรีตลอดงาน เเถมยังได้ผลิตภัณฑ์ที่ผู้เข้าร่วมได้ทำกลับบ้านไปใช้ได้ด้วย</h5>
                    </div><?php }?>


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