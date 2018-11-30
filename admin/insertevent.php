<?php

require_once __DIR__ . "/../libs/config.inc.php";
require_once __DIR__ . "/../libs/admin/func.inc.php";

$helper = new helperAdmin($db);

if (!$helper->checkLogin()) {
    $helper->redirectLogin();
    exit();
}
if (isset($_POST['Add'])) {

    $target_dir = "C:\\xampp\htdocs\webpro\upload\images";
    $target_file = $target_dir . "\\" . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {

            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        echo $target_file;
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $ID = rand(0, 9999);
            $name = $_POST['Activity_name'];
            $detail = $_POST['Activity_detail'];
            $date = $_POST['Activity_date'];
            $pic = "upload/images/" . basename($_FILES["fileToUpload"]["name"]);

            $qu = "INSERT INTO `activity` (`Activity_ID`, `Activity_Name`, `Activity_Detail`, `Activity_Date`, `Admin_ID`,`Activity_Pic`)
      VALUES($ID, '$name', '$detail', '$date', 1,'$pic')";
            $result = $db->query($qu);
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

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
                    <button class=" btn-lg btn-danger" type="submit" style="margin-top:25px;width: 12%" data-toggle="modal"
                            data-target="#myModal">LOGOUT</button>
                        <!--เมนูด้านขวา -->
                </ul>
            </nav>
        </div>
    </div>
    <div class="container" style="width:95%">
        <div class="panel panel-default">
            <div class="panel-heading">เขียนบทความใหม่</div>
            <div class="panel-body">
                <div class="container" style="width:80%">
                    <form method="POST"  enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">ชื่อบทความ : <span style="color:red">*</span></label>
                            <input type="text" class="form-control" id="" name="Activity_name">
                        </div>
                        <br>
                        <label>
                            ภาพหน้าปก : <span style="color:red">*</span>รูปที่ทำการอัพโหลดต้องมีขนาด 1370 x 700 Pixels
                            <br><br>  <input type="file" name="fileToUpload" id="fileToUpload">
                        </label>
                        <br>
                        <br>
                        รายละเอียด : <span style="color:red">*</span>
                        <br>
                        <textarea name="Activity_detail" id="editor1" rows="10" cols="80">

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
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='date' class="form-control" name="Activity_date" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#datetimepicker1').datetimepicker();
                                });
                            </script>
                        </div>
                            <input type="submit" class="btn btn-success" name="Add" value="บันทึก" style="float: right">
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