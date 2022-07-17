<?php
$conn = mysqli_connect("localhost", "root", "", "web");
session_start();
$_SESSION['role']=$_GET['role'];
$coursename=$_SESSION['role'];
$find="select * from courses where coursename='$coursename';";
$query=mysqli_query($conn,$find);
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

    for(let i=0;i<<?php echo mysqli_num_rows($query); ?>;i++){
        $("#topicContent").append("<a></a>");
    }
  
    $("#topicContent a").addClass("hello");

    $("#topicContent a").addClass("list-group-item list-group-item-action gap-3 py-3").attr("href","#")
    .attr("aria-current","true").append($("<div/>").addClass("row p-3"));
    $("#topicContent .row").css({"background-color": "white"}).append($("<div/>").addClass("col-md-12").append($("<h4/>").addClass("topic").text("Topic name")));
    $("#topicContent .row").append($("<div/>").addClass("col-md-6").append($("<h6/>").addClass("diff").text("Difficulty")));
    $("#topicContent .row").append($("<div/>").addClass("col-md-6").append($("<h6/>").addClass("time").text("10min 25s")));
    $("#topicContent .row").append($("<div/>").addClass("col-md-12").append($("<p/>").addClass("pre").text("Prerquisite")));
    $("#topicContent .row").append($("<div/>").addClass("col-md-12").append($("<form/>").attr("action","http://localhost/LearningPoint/description.php")
        .attr("method","POST").append($("<button/>").addClass("btn btn-info").attr("type","submit")
        .attr("name","id").text("Details"))));
    <?php
        $topicname = array();
        $q = "select topicname from courses where coursename='$coursename';";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($topicname, $row["topicname"]);
        }
        ?>

        let topic = <?php echo json_encode($topicname); ?>;
        $("#topicContent .row .topic").each(function(i) {
            $(this).text(topic[i]);
        });
        <?php
        $diff = array();
        $q = "select difficulty from courses where coursename='$coursename';";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($diff, $row["difficulty"]);
        }
        ?>

        let diffi = <?php echo json_encode($diff); ?>;
        $("#topicContent .row .diff").each(function(i) {
            $(this).text(diffi[i]);
        });
        <?php
        $time = array();
        $q = "select apxtime from courses where coursename='$coursename';";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($time, $row["apxtime"]);
        }
        ?>

        let tm = <?php echo json_encode($time); ?>;
        $("#topicContent .row .time").each(function(i) {
            $(this).text(tm[i]);
        });
        <?php
        $pre = array();
        $q = "select preperq from courses where coursename='$coursename';";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($pre, $row["preperq"]);
        }
        ?>

        let pre = <?php echo json_encode($pre); ?>;
        $("#topicContent .row .pre").each(function(i) {
            $(this).text(pre[i]);
        });
        <?php
        $uid = array();
        $q = "select uploadid from courses where coursename='$coursename';";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($uid, $row["uploadid"]);
        }
        ?>

        let uid = <?php echo json_encode($uid); ?>;
        $("#topicContent .row button").each(function(i) {
            $(this).attr("value",uid[i]);
        });
    </script>
</body>
</html>