<?php

require_once __DIR__ . "/libs/config.inc.php";
require_once __DIR__ . "/libs/func.inc.php";

$helper = new helperAdmin($db);

if (!$helper->checkLogin()) {
    $helper->redirectLogin();
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $plant = $helper->PlantQueryOne($db, $id);
}

if (isset($_POST['Edit'])) {
    $ID = $_POST['plant_ID'];
    $name = $_POST['plant_name'];
    $detail = $_POST['plant_detail'];
    $date = $_POST['plant_date'];
    $mapid = $_POST['Map_ID'];
    $mapValue = $_POST['Map_Value'];

    $latlong = explode(',', $mapValue);
    $lat = trim($latlong[0]);
    $long = trim($latlong[1]);

    $sql_update_map = "UPDATE map
                        SET Latitude = '$lat', Longtitude = '$long'
                        WHERE Map_ID = '$mapid';";
    $result = $db->query($sql_update_map);


    $quy = "UPDATE plant SET Plant_Name = '$name' , Plant_Detail = '$detail' , Plant_Date = '$date' , Map_ID='$mapid' WHERE Plant_ID = '$ID';";
    $result = $db->query($quy);

    $qu = "INSERT INTO `plant` (`Plant_ID`, `Plant_Name`, `Plant_Detail`, `Plant_Date`,`Plant_Pic`, `Admin_ID`,`Map_ID`)
     VALUES($ID, '$name', '$detail', '$date', 'static/images/image-not-found.png', 1, '$mapid')";
    $result = $db->query($qu);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>บึงบัว</title>
    <meta charset="utf-8">
    <meta name="viewport">
   <!-- Bootstrap -->
   <link href="../admin/assets/option/vendors//bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../admin/assets/option/build/css/custom.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="../admin/assets/option/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admin/assets/option/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Datatable-->
    <script src="../admin/assets/option/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../admin/assets/option/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="../admin/assets/option/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Scripts -->
    <script src="../admin/assets/option/build//js/custom.min.js"></script>
    <!-- CK Editor-->
    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

    <link rel="stylesheet" href="../../admin/assets/css/event.css">
    <!-- edit css by tasto -->
    <link href="../admin/assets/css/home.css" rel="stylesheet">

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
</head>

<body>
    <div class="top_nav">
        <div class="nav_menu">
            <nav class="">
                <a href="<?php echo ROOT_URL . "/admin/dashboard.php" ?>">
                    <img src="../admin/assets/images/navbar.png" style="margin-left: 1%;">
                </a>
                <ul class="nav navbar-nav navbar-right">
                <button class=" btn-lg btn-danger" type="submit" style="margin-top:25px;width: 12%" data-toggle="modal" data-target="#myModal">LOGOUT</button>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container" style="width:95%">
        <div class="panel panel-default">
            <div class="panel-heading">เขียนบทความใหม่</div>
            <div class="panel-body">
                <div class="container" style="width: 80%">
                    <form method="POST">
                        <div class="form-group">
                          <label for="name">id :</label>
                            <input type="text" class="form-control" name="plant_ID" value="<?php echo $plant['Plant_ID']; ?>" readonly>
                            <label for="name">ชื่อบทความ : <span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="plant_name" value="<?php echo $plant['Plant_Name']; ?>">
                        </div>
                        <br>
                        <label>
                            ภาพหน้าปก : <span style="color:red">*</span>รูปที่ทำการอัพโหลดต้องมีขนาด 1370 x 700 Pixels
                            <br><br><input type="file" hidden>
                        </label>
                        <br>
                        <br>
                        รายละเอียด : <span style="color:red">*</span>
                        <br>
                        <textarea rows="10" cols="80" name="plant_detail" id="editor1">
                            <?php echo $plant['Plant_Detail']; ?>
                        </textarea>
                        <script>
                            CKEDITOR.replace('editor1');
                        </script>

                        <div class="row">
                            <div class="col-sm-6"><label for="name">ประเภทบทความ : </label>
                                <br>
                                <input type="text" size="60">
                            </div>

                            <div class="col-sm-6"><label for="name">วันที่ :</label>
                                <br>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker' >
                                        <input type='date' class="form-control" name="plant_date" require value="<?php echo $plant['Plant_Date']; ?>">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#datetimepicker').datetimepicker();
                                });
                            </script>
                            <div class="col-sm-6"><label for="name">ค่าละติจูด และ ค่าลองติจูด : <span style="color:red">*</span></label>
                                <br>
                                <input type="hidden" name="Map_ID" value="<?php echo $plant['Map_ID']; ?>">
                                <input type="text" size="60" name="Map_Value" value="<?php echo $plant['Latitude']; ?>, <?php echo $plant['Longtitude'] ?>" require>
                            </div>
                        </div>
	            <input type="submit" class="btn btn-success" name="Edit" value="บันทึก" style="float: right">
                    </form>
                </div>
            </div>
        </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="background-color: red; color: white;">
                <center>
                    <i class="fa fa-sign-out" style="font-size: 1000%;margin-top: 5%;"></i>
                    <h1>ทำการยืนยันเพื่อออกจากระบบ</h1>
                    <button class=" btn-lg btn-dark" type="button" style="margin-top:25px;width: 12%" data-dismiss="modal">ยกเลิก</button>
                    <a href="<?php echo ROOT_URL . "/admin/logout.php" ?>">
                        <button class=" btn-lg btn-success" type="submit" style="margin-top:25px;width: 12%">ยืนยัน</button>
                    </a>
                </center>
            </div>

        </div>
    </div>

</body>

</html>