<?php 

require_once(__DIR__ . "/libs/config.inc.php");
require_once(__DIR__ . "/libs/func.inc.php");

$helper = new helperAdmin($db);

if(!$helper->checkLogin()){
    $helper->redirectLogin();
    exit();

}
$Countnotsent = $helper->CountProductlistnotsent($db);
while ($row = $Countnotsent->fetch()) {
   $Count= $row['count(Sell_ID)'];
}
$Countall = $helper->Countoverall($db);
while ($row = $Countall ->fetch()) {
    $CountA= $row['count(Sell_ID)'];
 }

 $CountallProduct= $helper->CountProduct($db);
while ($row = $CountallProduct ->fetch()) {
    $CountP= $row['count(Product_ID)'];
 }

// $dataGraph = $helper->sumProductGraph($db);

// $line_quantity = array();
// $line_money = array();

// for($i = 0; $i< count($dataGraph); $i++){
//     $line_quantity[] = array(
//                             // 'date' => date('D M d Y H:i:s O', strtotime($dataGraph[$i]['Sell_Date'])),
//                             'date' => $dataGraph[$i]['Sell_Date'],
//                             'value' => number_format($dataGraph[$i]['quantity'], 2,'.', ',')
//                         );
//     $line_money[] = array(
//         // 'date' => date('D M d Y H:i:s O', strtotime($dataGraph[$i]['Sell_Date'])),
//         'date' => $dataGraph[$i]['Sell_Date'],
//         'value' => number_format($dataGraph[$i]['total_Price'], 2,'.', ',')
//     );
// }


?>

<!DOCTYPE html>
<html>

<head>
    <title>บึงบัว</title>
    <meta charset="utf-8">
    <meta name="viewport">
    <!-- Bootstrap -->
    <link href="../admin/assets/option/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../admin/assets/option/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../admin/assets/option/build/css/custom.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="../admin/assets/option/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admin/assets/option/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../admin/assets/option/build/js/custom.min.js"></script>
    <!-- edit css by tasto -->
    <link href="../admin/assets/css/home.css" rel="stylesheet">

    <style>
    #chartdiv {
        width: 100%;
        height: 500px;
    }

    </style>



</head>

<body class="body backgroud">
    <div class="top_nav">
        <div class="nav_menu">
            <nav class="">
                <a href="<?php echo ROOT_URL."/admin/dashboard.php" ?>">
                    <img src="../admin/assets/images/navbar.png" style="margin-left: 1%;">
                </a>
                <ul class="nav navbar-nav navbar-right">
                    <button class=" btn-lg btn-danger" type="submit" style="margin-top:25px;width: 12%" data-toggle="modal"
                        data-target="#myModal">LOGOUT</button>
                    <!--เมนูด้านขวา -->
                </ul>
            </nav>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>
    <div class="row" >
        <div class="col-sm-4 textedit" style="margin-left: 20% ;background-color: darkolivegreen;">
                <br><h3>คำสั่งซื้อของสินค้าที่ยังไม่ได้ส่ง</h3><br>
                <h1> <?php echo $Count; ?></h1>
                <a href="<?php echo ROOT_URL."/admin/salelist.php" ?>">
                    <button class=" btn-lg btn-primary colorbutton" type="submit" style="margin-bottom:25px;">ดูคำสั่งซื้อทั้งหมด</button>
                </a>
            </div>
        <div class="col-sm-4 textedit" style="background-color: #6b2f40;" >
                <br><h3>คำสั่งซื้อของสินค้าทั้งหมด</h3><br>
            <h1><?php echo $CountA; ?></h1>
            <a href="<?php echo ROOT_URL."/admin/orderall.php" ?>">
                <button class=" btn-lg btn-primary colorbutton" type="submit" style="margin-bottom:25px;">ดูคำสั่งซื้อทั้งหมด</button>
            </a>
        </div>
        <div class="col-sm-4 textedit" style="background-color: #2f476b">
                <br><h3>จำนวนของสินค้าทั้งหมด</h3><br>
            <h1><?php echo $CountP; ?></h1>
            <a href="<?php echo ROOT_URL."/admin/productall.php" ?>">
                <button class=" btn-lg btn-primary colorbutton" type="submit" style="margin-bottom:25px;">ดูจำนวนสินค้าทั้งหมด</button>
            </a>
        </div>
    </div>
    <br><br><br>
    <!-- <hr style="color: black;width: 80%;"> -->
    <!-- <center>
        <div class="x_panel" style="width: 80%">
            <div class="x_title">
                <h2>สถิติการขาย<small>จำนวนสินค้าที่ขายได้ / จำนวนเงินที่ขายได้</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="chartdiv"></div>
            </div>
        </div>
    </center> -->

    <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 style="margin:2%;">ประเภทของบทความ</h1>
        <hr style="color: black;width: 80%;">
    </div>

    <div>
        <center>
            <a href="<?php echo ROOT_URL."/admin/event.php" ?>">
                <img src="../admin/assets/images/event.png" width="250px" height="250px" style="margin-right:5%;"></a>
            <a href="<?php echo ROOT_URL."/admin/product.php" ?>">
                <img src="../admin/assets/images/product.png" width="250px" height="250px" style="margin-right:5%;"></a>
            <a href="<?php echo ROOT_URL."/admin/plant.php" ?>">
                <img src="../admin/assets/images/plant.png" width="250px" height="250px" style=" margin-right:5%;"></a>
        </center>
    </div>
    
    <br><br><br>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="background-color: red; color: white;">
                <center>
                    <i class="fa fa-sign-out" style="font-size: 1000%;margin-top: 5%;"></i>
                    <h1>ทำการยืนยันเพื่อออกจากระบบ</h1>
                    <button class=" btn-lg btn-dark" type="button" style="margin-top:25px;width: 12%" data-dismiss="modal">ยกเลิก</button>
                    <a href="<?php echo ROOT_URL."/admin/logout.php" ?>">
                        <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;width: 12%">ยืนยัน</button>
                    </a>
                </center>
            </div>

        </div>
    </div>


 <!-- Resources -->
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>

    <!-- <script>
        // Themes begin
            // am4core.useTheme(am4themes_animated);
        // Themes end

        var chart = am4core.create("chartdiv", am4charts.XYChart);

        var data = <?php echo json_encode($line_quantity) ?>;
        var data2 = <?php echo json_encode($line_money) ?>;
        var value = 50;

        if(data.length == 0){
            for(let i = 0; i < 300; i++){
                let date = new Date();
                date.setHours(0,0,0,0);
                date.setDate(i);
                console.log(date);
                value -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
                data.push({date:date, value: value});
            }

        }

        if(data2.length == 0){
            for(let i = 0; i < 300; i++){
                let date = new Date();
                date.setHours(0,0,0,0);
                date.setDate(i);
                console.log(date);
                value -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
                data2.push({date:date, value: value});
            }

        }
        
        chart.data = data;

        // Create axes
        var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
        dateAxis.renderer.minGridDistance = 60;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

        // Create series
        var series = chart.series.push(new am4charts.LineSeries());
        series.dataFields.valueY = "value";
        series.dataFields.dateX = "date";
        series.tooltipText = "จำนวนสินค้าที่ขายได้ทั้งหมด {value}"
        series.data = data

        series.tooltip.pointerOrientation = "vertical";


        // Create series
        var series2 = chart.series.push(new am4charts.LineSeries());
        // series2.stroke = am4core.color("#ff0000"); 
        series2.dataFields.valueY = "value";
        series2.dataFields.dateX = "date";
        series2.tooltipText = "จำนวนเงินที่ขายได้ {value}"
        series2.data = data2

        series2.tooltip.pointerOrientation = "vertical";

        chart.cursor = new am4charts.XYCursor();

        //chart.scrollbarY = new am4core.Scrollbar();
        chart.scrollbarX = new am4core.Scrollbar();
    </script> -->
</body>

</html>




<!-- <h2>Hear is Dashboard</h2> -->

<?php 
  //  $helper->showMsg();
?>



   

<p><a href="<?php echo ROOT_URL."/admin/logout.php" ?>">Logout</a></p> -->