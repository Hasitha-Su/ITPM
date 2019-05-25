<?php

$connect = mysqli_connect("localhost", "root", "", "abc");


if (isset($_POST['courseId'])) {

    $courseId = $_POST['courseId'];


    $query = "SELECT * FROM course_module WHERE ModuleType = '$courseId'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($course_row = mysqli_fetch_array($result)) {
            echo "<tr><td>".$course_row['ModuleNo']."</td><td>".$course_row['ModuleName']."</td>";
        }
    } else {
        echo "<tr><td colspan='2'>No Modules found...</td></tr>";
    }

}
?>