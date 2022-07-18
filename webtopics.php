<?php
$conn = mysqli_connect("localhost", "root", "", "web");
session_start();
$_SESSION['role']=$_GET['role'];
$coursename=$_SESSION['role'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="webtopics.css">
    <style>
        body
        {
            background-color: silver;
        }
        h1{
            padding: 20px;
        }
    </style>
</head>
<body>
    <center><h1>Topics</h1></center>
    <div id="topicContent">   
    </div>
    <script>
    <?php
    $find="select * from courses where coursename='$coursename';";
    $query=mysqli_query($conn,$find);
    while($row=mysqli_fetch_assoc($query))
    {
    ?>
    var r='<a class="hello list-group-item list-group-item-action gap-3 py-3" href="#" aria-current="true"><div class="row p-3" style="background-color: white;"><div class="col-md-12"><h4 class="topic"><?php echo $row["topicname"]; ?></h4></div><div class="col-md-6"><h6 class="diff"><?php echo $row["difficulty"]; ?></h6></div><div class="col-md-6"><h6 class="time"><?php echo $row["apxtime"]; ?></h6></div><div class="col-md-12"><p class="pre"><?php echo $row["preperq"]; ?></p></div><div class="col-md-12"><form action="http://localhost/LearningPoint/description.php" method="POST"><button class="btn btn-info" type="submit" name="id" value=<?php echo $row["uploadid"]; ?>>Details</button></form></div></div></a>';

    $("#topicContent").append(r);
        <?php } ?>
    
    </script>
</body>
</html>