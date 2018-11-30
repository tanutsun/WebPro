<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
    <title> Detail Process1 </title>
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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL ."/member/module/product/product.php" ?>" > ผลิตภัณฑ์ </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL ."/member/module/plan/plan.php" ?>">พันธุ์พืช</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo ROOT_URL ."/member/module/activity/activity.php" ?>">กิจกรรม</a>
                </li>
         
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL ."/member/module/map/map.php" ?>">แผนที่</a>
                </li>
            </ul>
        </nav>

        <!--stat detail activity-->
            <div class="container" style="padding-bottom: 20%;">
				<center>
       			 <img src="../../img/dishwashingsoap1.jpg" style="width:550px; height:450px; padding-top:7%;">
        		 <br><br>
    			
                    <br><h3><b>การทำน้ำยาล้างจาน(สูตรบี-ไบรท์)</b></h3></center>
                    <br>
                    <h3><b>ส่วนประกอบ</b></h3>
                    <hr style="border: 10%;">
					<h4>1.BCA 102 1 กิโลกรัม
                    <br>
                    2.บี-ไบรท์ 10 ลิตร 
                    <br>
                    3.สี
                    <br>
                    4.กลิ่น
                    </h4>
					<br><br>
                    <br><h3><b>ขั้นตอนการทำน้ำยาล้างจาน(สูตรบี-ไบรท์)</b></h3>
                    <hr style="border: 10%;">
					<h4>1) นำ BCA102 1 กิโลกรัม ใส่ภาชนะ เเละกวนให้ไปทิศเดียวกันจนกลายเป็นเนื้อเดียวกันเนียนเเละฟู
                    <br>
                    2) ค่อยๆเติม บี-ไบรท์ทีละนิด จนครบ 10 ลิตร โดยคนเบาๆไปในทิศทางเดียวกันช้าๆจนน้ำยาเหนียวข้นขึ้น
                    <br>
                    3) เติมสี เเละ กลิ่นตามที่ต้องการ
                    </h4>
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


<!--script-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
    </body>
</html>