<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
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
            
            .plantImg {
                display: grid;
                margin-left: auto;
                margin-right: auto;
                padding-top: 7%;
                width: auto;
                height: 450px;
            }

            .detail {
                font-size: large;
                text-indent: 1.8em;
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
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-sm bg-nav navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="/webpro/member/index.php">
                <img src="../../img/logo-nav.png" alt="logo" style="width:40px;">
            </a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/webpro/member/module/product/product.php">ผลิตภัณฑ์</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="plan.php">พันธุ์พืช</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/webpro/member/module/activity/activity.php">กิจกรรม</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="/webpro/member/module/map/map.php">แผนที่</a>
                </li>
            </ul>
        </nav>


        <!-- Main Content -->
        <div class="container-fluid">
            <div class="row pt-5 pb-5">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <center><img src="../../img/plant1.jpg" style="width:90%; height:450px;"></center>
                        </div>
                    <div class="col-sm-10 offset-sm-1 pt-3">
                        <h5 class="text-center">ต้นใบเตย</h5>
                            <p class="detail">
                                ใบเตย จัดเป็นไม้ยืนต้นพุ่มเล็ก ขึ้นเป็นกอ มีใบเป็นใบเดี่ยวเรียงสลับเวียนเป็นเกลียวจนถึงยอดใบ ลักษณะของเป็นทางยาว สีเขียวเป็นมัน ใบค่อนข้างแข็งมีขอบใบเรียบ ซึ่งเราสามารถนำใบเตยมาใช้ได้ทั้งใบสดและใบแห้ง ในใบเตยจะมีกลิ่นหอมของน้ำมันหอมระเหย (Fragrant Screw Pine) โดยกลิ่นหอมของใบเตยนั้นมากจากสารเคมีที่ชื่อว่า 2-acetyl-1-pyrroline ซึ่งเป็นกลิ่นเดียวกันกับที่ได้ใน ข้าวหอมมะลิ ขนมปังขาว และดอกชมนาด
                            </p>
                        <br>
                        <img src="../../img/locationPin.png"> <a data-toggle="modal" href="#modalMiniMap"><p style="display: inline;font-size: large">คลิกเพื่อดูแผนที่</p></a>
                        <div class="modal fade modal-fullscreen " id="modalMiniMap" role="dialog">
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
    
                   
        <script>
            function initialize() {
              var myLatlng = new google.maps.LatLng(13.7246005,100.6331108);
              var mapOptions = {
                zoom: 4,
                center: myLatlng
              }
              var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

              var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  title: 'Share Olanlab Com'
              });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

                                    </div>
                                </div>
                            </div>
                        </div>
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
            <center>
            <a href="plant.php" class="btn btn-back">กลับสู่หน้าพืชพันธุ์</a>
            </center>
            <br>
        </div>

        <!-- Footer -->
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