<?php
$conn = mysqli_connect("localhost", "root", "", "web");
$username=$_POST["k"];
$type=$_POST["type"];
$pk=$_POST["pk"];
$q="delete from $type where $pk ='$username';";
$query=mysqli_query($conn,$q);
?>