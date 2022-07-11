<?php
$conn = mysqli_connect("localhost", "root", "", "web");
?>

<?php
session_unset();
session_destroy();
header("location:homePage.html");
?>