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
               background-image: url("../../img/bg/bg.png");
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
                        <a class="nav-link" href="../../module/plan/plan.php">พันธุ์พืช</a>
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
                
                        <div class="row" style="padding-top:5%; padding-bottom: 5%; padding-bottom: 5%;">
                                <div class="col-sm">
                                 <img src="../../img/activity/activity1.jpg" style="width : 350px;  height: 280px;">
                               </div>
                               <div class="col-sm" style="padding-left:0px; padding-top: 65px;">
                                <b><h4> ชื่อกิจกรรม : ศึกษาดูงานจังหวัด "จันทบุรี" "ระยอง" เเละ "ปราจีนบุรี"
                                 <br><br>
                                 รายละเอียดกิจกรรม :  ไปท่องเที่ยวชมวัฒนธรรม3จังหวัด...
                                
                                 <br><br><br>
                                 <a class="btn btn-read" href="../detail.activity/detail1.php" role="button">อ่านเพิ่มเติม</a>
                                  </div>
                       </div>
                

                  

                <!--start pageing number-->
                <nav aria-label="Page navigation example" style="padding-top:120px;"> 
                  <ul class="pagination justify-content-end">
                    
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                   
                   
                  </ul>
                </nav> <!--end pageing number-->
        </div> <!--end contrainer-->


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