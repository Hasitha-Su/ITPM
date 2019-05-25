<?php

$connect = mysqli_connect("localhost", "root", "", "abc");


if (isset($_POST['query'])) {

    $search_query = $_POST['query'];


    $query = "SELECT * FROM courses WHERE CourseName LIKE '$search_query%'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<option value='0'> Please select a course</option>";
        while ($course_row = mysqli_fetch_array($result)) {
            echo "<option value='".$course_row['CourseID']."'>".$course_row['CourseName']."</option>";
        }
    } else {
        echo "false";
    }

}
?>