<?php
include("DB_Connect.php");
$ModuleID = $_SERVER['QUERY_STRING'];

$sql2 = "SELECT * FROM `files`WHERE ModuleID = '{$ModuleID}'";
$res = mysqli_query($con, $sql2);

if (isset($_POST['upload'])) {


    $fname = $_FILES['attachment']['name'];
    $size = $_FILES['attachment']['size'];
    $type = $_FILES['attachment']['type'];
    $tmp_name = $_FILES['attachment']['tmp_name'];


    if (empty($fname)){
        $location = null;
        $new_f_name = null;
    }else{
        $location = "upload/".$ModuleID."/";
        if (!file_exists($location)){
            mkdir("upload/".$ModuleID);
        }
        //   $new_f_name = 1234+'_'.$fname;
        //   rename( $fname, $new_f_name) ;
        //   echo $_SESSION['update_s_id'].rename( $fname, $new_f_name);
    }

    if(move_uploaded_file($tmp_name, $location.$fname)){
        $fmsg = "Uploaded Successfully";
    }else{
        $fmsg = "Failed to Upload File";
    }

    echo '<script type="text/javascript">alert("'.$fmsg.'")</script>';


        $sql = "INSERT INTO `files` (`FileName`, `ModuleID`) VALUES ('{$fname}', '{$ModuleID}')";


    $sqlget = "SELECT * FROM course_module";
    $sqldata = mysqli_query($con, $sqlget) or die('error getting');

    while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
        //echo '<option value="'.$row['ModuleID'].'"></option>';
    }


    if (mysqli_query($con,$sql)) {

    }
    else{

    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" style="background: #ffc107; padding: 25px">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"style="font-size: 30px; color: white">ABC Institute</a>
        </div>
        <ul class="nav navbar-nav" style="float: right">
            <li class="active"><a href="#" style="font-size: 30px;color: white">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-size: 30px;color: white">
                    Admin <span class="caret"></span></button>
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="Add_Courses.php">Add Courses</a><br>
                    <a class="dropdown-item" href="Course_Module_upload.php">Add Course Modules </a>


                </div>
            </li>
            <li><a href="Courses.php" style="font-size: 30px;color: white">Courses</a></li>

        </ul>
    </div>
</nav>
<div class="container" style=" margin-top: 60px; position: center; float: left;">

    <div class="row">
        <div class="col-sm-4">





        </div>
        <div class="col-sm-8">
            <h1><u>Cources</u></h1>
            <table  class="table border-0">
                <?php

                while ($row = mysqli_fetch_array($res))

                    echo "<tr>
                    <td><a href='upload/".$row['ModuleID']."/".$row['FileName']."' <h4>".$row['FileName']."</h4></a></td>
                    <td class='p-2'><a href='delete_course.php?".$row['FileID']."&id=".$ModuleID."'><input type='button' class='btn btn-sm btn-danger mb-1 mr-2' value='Delete'></a><a href=''><input type='button' class='btn btn-sm btn-success ml-2 mb-1' value='Update'></a> </td>
                </tr>";

                ?>
            </table>


            <h1>Upload Files</h1>
            <br><br>


            <form method="post" enctype="multipart/form-data" action="Add_Files.php?<?php echo $ModuleID?>">





                <div class="form-group">
                    <label class="control-label col-sm-2" >Upload Files:</label>
                    <div class="col-sm-10">
                        <input type="file" class=" form-control-file" name="attachment" >
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-dark" style="" name="upload"  >Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
</div>

</div>




<?php
 include('DB_Connect.php');
 $sqlget = "SELECT * FROM course_module";
 $sqldata = mysqli_query($con, $sqlget) or die('error getting');


?>
</body>
</html>
