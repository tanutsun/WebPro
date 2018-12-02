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
                    <li class="nav-item ">
                        <a class="nav-link" href="../../module/product/product.php">ผลิตภัณฑ์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../module/plant/plant.php">พันธุ์พืช</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../module/activity/activity.php">กิจกรรม</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../../module/map/map.php">แผนที่</a>
                    </li>
                </ul>
            </nav>


        <div id="googleMap"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.3984763828053!2d100.7845000143117!3d
        13.753617300958133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc6b9b41bb0e0664!2z4Lio4Li54LiZ4
        Lii4LmM4LiB4Liy4Lij4LmA4Lij4Li14Lii4LiZ4Lij4Li54LmJ4LiE4LiZ4LmA4Lih4Li34Lit4LiHIOC4muC4tuC4h-C4muC4seC4pw!5e
        1!3m2!1sth!2sth!4v1540799335281" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> 
    
        
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

    </body>
</html>