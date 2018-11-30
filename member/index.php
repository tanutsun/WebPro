<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--slick-->
        <link rel="stylesheet" type="text/css" href="slick/slick.css" />
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    
        <title> บึงบัว </title>
        <style>
            
            body {
               background-image: url("img/bg/bg.png");
               width: 100%;
           }

            .font {
                 font-family: 'Supermarket';
            }

            @font-face {
                font-family: 'Supermarket';
                src: url('font/Supermarket/supermarket.ttf');
                src: local('Souses Regular'), local('Supermarket Web'),
                url("font/Supermarket/supermarket.woff") format("woff"),
                url("font/Supermarket/supermarket.otf") format("opentype"),
                url("font/Supermarket/supermarket.svg#grablau") format("svg");
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

            .btn-all{
                background-color:#2054FF;
                border-radius: 25px;
                width: 10%;
                color:whitesmoke;
            }

            .name-plant{
                font-size: 20px;
            }

        </style>
    </head>

    <body>
        <font face="Supermarket">   
        <nav class="navbar navbar-expand-sm bg-nav navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="\webpro\member\index.php">
                <img src="img/logo-nav.png" alt="logo" style="width:40px;">
            </a>        
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="\webpro\member\module\product\product.php"  > ผลิตภัณฑ์ </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\webpro\member\module\plan\plan.php" >พันธุ์พืช</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="\webpro\member\module\activity\activity.php" >กิจกรรม</a>
                 
                </li>
         
                <li class="nav-item">
                    <a class="nav-link" href="\webpro\member\module\map\map.php">แผนที่</a>
                 
               
                </li>
            </ul>
        </nav>

        <div class="highlight mb-5">
            <div><a href="\webpro\member\module\product\detailproduct.php?Product_ID=7" ><img src="img/index-highlight1.jpg" alt="img1 test" width="100%" class="img-fluid"></a></div>
            <div><a href="\webpro/member/module/plan/detailplan.php?Plant_ID=13" ><img src="img/index-highlight2.jpg" alt="img1 test" width="100%" class="img-fluid"></a></div>
            <div><a href="\webpro\member\module\detail.activity\detail1.php" ><img src="img/index-highlight3.jpg" alt="img1 test" width="100%" class="img-fluid"></a></div>
        </div>
        
        <div class="container">                    
        
        <center>
            
            <div class="row">
                <div class="col-2">
                    <h2>ผลิตภัณฑ์</h2>
                </div>
                <div class="col-10">
                    <hr>
                </div>
            </div>
            <br>
            <div class="row pt-2 pb-3">
                <div class="col-md-3">
                    <a href="\webpro\member\module\product\detailproduct.php?Product_ID=2">
                    <img src="img/index-product1.jpg" style="width:100%; height:160px;">  
                    </a>
                    <div class="row">
                        <div class="col">
                            <p class="name-plant">กล้วยตาก</p>
                        </div>
                    </div>   
                </div>
                <div class="col-md-3">
                    <a href="\webpro\member\module\product\detailproduct.php?Product_ID=7">
                    <img src="img/index-product2.jpg" style="width:100%; height:160px;">
                    </a>
                    <div class="row">
                        <div class="col">
                            <p class="name-plant">สบู่สมุนไพร</p>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3">
                    <a href="\webpro\member\module\product\detailproduct.php?Product_ID=5">
                    <img src="img/index-product3.jpg" style="width:100%; height:160px;"> 
                    </a>
                    <div class="row">
                        <div class="col">
                            <p class="name-plant">น้ำยาล้างจาน</p>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3">
                    <a href="\webpro\member\module\product\detailproduct.php?Product_ID=6">
                    <img src="img/index-product4.jpg" style="width:100%; height:160px;">
                    </a>
                    <div class="row">
                        <div class="col">
                            <p class="name-plant">น้ำยาซักผ้า</p>
                        </div>
                    </div> 
                </div>
            </div> 
            <br>
            <a href="module/product/product.php" class="btn btn-all">ดูทั้งหมด</a>  
            <br>
            <br>
            <br>
            <br>  
            
            <div class="row">
                <div class="col-2">
                    <h2>พันธุ์พืช</h2>
                </div>
                <div class="col-10">
                    <hr>
                </div>
            </div>
            <br>
            <div class="row pt-2 pb-3">
                <div class="col-md-12 pb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="\webpro/member/module/plant/detailplant.php">
                                <img src="img/index-plant1.jpg" style="width:100%; height:200px;"> 
                            </a> 
                            <div class="row">
                                <div class="col">
                                    <p class="name-plant">ต้นใบเตย</p>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <a href="\webpro/member/module/plan/detailplan.php?Plant_ID=4">
                                <img src="img/ไผ่.jpg" style="width:100%; height:200px;">
                            </a>
                            <div class="row">
                                <div class="col">
                                    <p class="name-plant">ต้นไผ่</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="\webpro/member/module/plan/detailplan.php?Plant_ID=15">
                                <img src="img/ละมุด.jpg" style="width:100%; height:200px;">
                            </a>
                            <div class="row">
                                    <div class="col">
                                    <p class="name-plant">ต้นละมุด</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="col-md-12 pt-2">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="\webpro/member/module/plan/detailplan.php?Plant_ID=11">
                                <img src="img/index-plant4.jpg" style="width:100%; height:200px;">
                            </a>
                            <div class="row">
                                <div class="col">
                                    <p class="name-plant">ต้นมะม่วง</p>
                                </div>
                            </div>        
                        </div>
                        <div class="col-md-4">
                            <a href="\webpro/member/module/plan/detailplan.php?Plant_ID=13">
                                <img src="img/index-plant5.jpg" style="width:100%; height:200px;">
                            </a>
                            <div class="row">
                                <div class="col">
                                    <p class="name-plant">ต้นมะละกอ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="\webpro/member/module/plan/detailplan.php?Plant_ID=1">
                                <img src="img/เชอรี่.jpg" style="width:100%; height:200px;">
                            </a>
                            <div class="row">
                                <div class="col">
                                    <p class="name-plant">ต้นเชอรี่</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>      
            </div> 
            <br>
            <a href="module/plant/plant.php" class="btn btn-all">ดูทั้งหมด</a>  
            <br>
            <br>
            <br>
            <br>
            
            <div class="row">
                <div class="col-2">
                    <h2>กิจกรรม</h2>
                </div>
                <div class="col-10">
                    <hr>
                </div>
            </div>
            <br>
            <div class="row pt-2 pb-3">
                
                
                <div class="col-md-3">
                    <a href="module/detail.activity/detail1.php">
                        <img src="img/index-activity2.jpg" style="width:100%; height:160px;"> 
                    </a>
                    <div class="row">
                        <div class="col">
                            <p class="name-plant">ศึกษาดูงานจังหวัด จันทบุรี ระยอง ปราจีนบุรี</p>
                        </div>
                    </div>
                </div>
                
            </div> 
            <br>
            <a href="module/activity/activity.php" class="btn btn-all">ดูทั้งหมด</a> 
            <br>
            <br>
            <br>
            <br>
        </center>

        </div>
    <!-- end container-->

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

    <!--slick-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

	<script type="text/javascript">
        $(document).ready(function(){
            $('.highlight').slick({
                dots : true
            });
        });             
	</script>
    
    </body>
</html>