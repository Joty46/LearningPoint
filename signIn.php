<?php
$conn = mysqli_connect("localhost", "root", "", "web");
session_start();
if (isset($_SESSION["signinUsername"])) {
    header("Location:homePage.html");
}
if (isset($_POST["signinUsername"])) {
    $username = $_POST["signinUsername"];
    $password = $_POST["signinPass"];

    $find = "select username, password from user where username='$username' and password='$password'";
    $findquery = mysqli_query($conn, $find);
    if (mysqli_num_rows($findquery) > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['time'] = time();
        header("Location:homePage.html");
    } else {
        echo "<script>alert('Email or password not correct')</script>";
    }
}

?>