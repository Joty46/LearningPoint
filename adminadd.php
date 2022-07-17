<?php
$conn = mysqli_connect("localhost", "root", "", "web");
$arr=json_decode($_POST['arr']);
$q="insert into user(username, email, password) values('$arr[0]','$arr[1]','abcd');";
$query=mysqli_query($conn,$q);
?>