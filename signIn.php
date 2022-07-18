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
            header("Location:admin.php");
        } 
        else {
            echo "<script>alert('Email or password not correct')
            window.location='http://localhost/LearningPoint/signIn.php'</script>";
        }
    }
    else{
        $find = "select username, password from user where username='$username' and password='$password'";
        $findquery = mysqli_query($conn, $find);
        if (mysqli_num_rows($findquery) > 0) {
            $row = mysqli_fetch_assoc($findquery);
            setcookie("username", $row['username'], time() + 86400);
            setcookie("password", $row['password'], time() + 86400);
            $_SESSION["username"] = $row['username'];
            $_SESSION["time"] = time();
            header("Location:http://localhost/LearningPoint/homepageWithlogin.php");
        } else {
            echo "<script>alert('Email or password not correct')
            window.location='http://localhost/LearningPoint/signIn.php'</script>";
        }
    }

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styleforsignin.css">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <img id="loginbg" src="logInBg.jpg" alt="log in">
        <div class="row justify-content-center login">
          <div class="col-xl-5 col-md-8">
            <form class="bg-white  rounded-5 shadow-5-strong p-5" action="http://localhost/LearningPoint/signIn.php" method="post">
                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign In</h3>
                <div class="form-outline mb-4">
                    <label class="form-label" for="signinUsername" style="margin-left: 0px;">Username</label>
                    <input type="text" name="signinUsername" value=<?php echo $_COOKIE["username"]?> class="form-control">
                    
                  <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64px;"></div><div class="form-notch-trailing"></div></div></div>
              <div class="form-outline mb-4">
                <label class="form-label" for="signinPass" style="margin-left: 0px;">Password</label>
                <input type="password" name="signinPass" value=<?php echo $_COOKIE["password"]?> class="form-control">
                
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            <p>Don't have an account? <a href="signUp.html" class="link-info">Sign Up</a></p>

            </form>
          </div>
        </div>
      </div>
</body>
</html>