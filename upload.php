<?php
$conn = mysqli_connect("localhost", "root", "", "web");
?>
<?php

    $coursename= $_POST["coursename"];
    $topicname = $_POST["topicname"];
    $diff = $_POST["difficulty"];
    $time = $_POST["apxtime"];
    $prereq = $_POST["prereq"];
    $description = $_POST["description"];
    $insert = "insert into courses(coursename,topicname,difficulty,apxtime,preperq,description) values('$coursename','$topicname', '$diff', '$time','$prereq','$description');";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Course Uploaded Successfully')</script>";
                header("Location:http://localhost/LearningPoint/homepageWithlogin.php");
    }
    else
    {
        echo "<script>alert('Something went wrong!')</script>";
    }
?>