<?php
$conn = mysqli_connect("localhost", "root", "", "web");
$id=$_POST["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description</title>
    < <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="webtopics.css">
</head>
<body>
    <img src="descriptionbg.jpg" alt="" id="desbg">
    <div class="heading mx-5"><div class="topic"><center><h1></h1></center></div>
    <?php
        $description = array();
        $q = "select description from courses where uploadid='$id';";
        $query = mysqli_query($conn, $q);
        $row = mysqli_fetch_assoc($query);
    
        ?>
    <div class="container mt-5 h-75">
           <?php echo $row["description"]; ?>
    </div>
    <script>

        <?php
        $topicname = array();
        $q = "select topicname from courses where uploadid='$id';";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($topicname, $row["topicname"]);
        }
        ?>

        let topic = <?php echo json_encode($topicname); ?>;
        $(".heading .topic h1").each(function(i) {
            $(this).text(topic[i]);
        });
        
        
    </script>
</body>
</html>
