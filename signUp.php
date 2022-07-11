<?php
$conn = mysqli_connect("localhost", "root", "", "web");
?>

<?php
if (isset($_POST["signupUsername"])) {
    $name= $_POST["signupName"];
    $username = $_POST["signupUsername"];
    $email = $_POST["signupEmail"];
    $password = $_POST["signupPass"];
    $cpassword = $_POST["signupCpass"];
    if ($password === $cpassword) {
        $find = "select username from user where username='$username'";
        $findquery = mysqli_query($conn, $find);
        if (mysqli_num_rows($findquery) > 0) {
            echo "<script>alert('Username Already Exist')</script>";
        }
        else {
            $insert = "insert into user(name,username,email,password) values('$name','$username', '$email', '$password')";
            if (mysqli_query($conn, $insert)) {
                echo "<script>alert('Registration Completed Successfully')</script>";
                header("Location:signIn.html");
            }
        }
    } 
    else {
        echo "<script>alert('Password Not matched')</script>";
    }
}
?>
