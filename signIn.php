<?php
$conn = mysqli_connect("localhost", "root", "", "web");
session_start();
if (isset($_SESSION["signinUsername"])) {
    header("Location:homePage.html");
}
if (isset($_POST["signinUsername"])) {
    $username = $_POST["signinUsername"];
    $password = $_POST["signinPass"];
    if($username==="Admin")
    {
        $find = "select username, password from user where username='$username' and password='$password'";
        $findquery = mysqli_query($conn, $find);
        if (mysqli_num_rows($findquery) > 0) {
            $row = mysqli_fetch_assoc($findquery);
            $_SESSION["username"] = $row['username'];
            $_SESSION["time"] = time();
            header("Location:admin.html");
        } 
        else {
            echo "<script>alert('Email or password not correct')
            window.location='http://localhost/LearningPoint/signIn.html'</script>";
        }
    }
    else{
        $find = "select username, password from user where username='$username' and password='$password'";
        $findquery = mysqli_query($conn, $find);
        if (mysqli_num_rows($findquery) > 0) {
            $row = mysqli_fetch_assoc($findquery);
            $_SESSION["username"] = $row['username'];
            $_SESSION["time"] = time();
            header("Location:http://localhost/LearningPoint/homepageWithlogin.php");
        } else {
            echo "<script>alert('Email or password not correct')
            window.location='http://localhost/LearningPoint/signIn.html'</script>";
        }
    }

    
}

?>