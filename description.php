<?php
$conn = mysqli_connect("localhost", "root", "", "web");
session_start();
$topic=$_SESSION['topic'];
echo $topic
?>
