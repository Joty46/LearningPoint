<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Admin</title>
</head>
<body>
    <script>
     $(document).ready(function() {
                    $('#py [data-toggle="tooltip"]').tooltip();
                    var actions = $("#users table td:last-child").html();

                    // Append table with add row form on add new button click
                    $("#py .add-new").click(function() {
                            $(this).attr("disabled", "disabled");
                            var index = $("#users table tbody tr:last-child").index();
                            var row = '<tr>' + '<td><input type="text" class="form-control" name="uid" id="uid"></td>' + '<td><input type="text" class="form-control" name="topic" id="topic"></td>' + '<td><input type="text" class="form-control" name="dif" id="dif"></td>' + '<td><input type="text" class="form-control" name="prereq" id="prereq"></td>' + '<td><input type="text" class="form-control" name="time" id="time"></td>' + '<td>' + actions + '</td>' + '</tr>';
                            $("#py table").append(row);
                            $("#py table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                            $('#py [data-toggle="tooltip"]').tooltip();
                        }

                    );

                    $(document).on("click", "#py .add", function() {
                            var empty = false;
                            var input = $(this).parents("tr").find('input[type="text"]');

                            input.each(function() {
                                    if (!$(this).val()) {
                                        $(this).addClass("error");
                                        empty = true;
                                    } else {
                                        $(this).removeClass("error");
                                    }
                                }

                            );
                            $(this).parents("tr").find(".error").first().focus();

                            if (!empty) {
                                input.each(function(i) {
                                        $(this).parent("td").html($(this).val());
                                    }

                                );

                                $(this).parents("tr").find(".add").toggle();
                                $("#py .add-new").removeAttr("disabled");
                            }
                        }

                    );

                    $(document).on("click", ".delete", function() {
                            $(this).parents("tr").remove();
                            $(".add-new").removeAttr("disabled");
                        }

                    );
                }

            );

            $(document).ready(function() {
                    var actions = $("#users table td:last-child").html();
                    <?php $q = "select * from courses where coursename='Python'";
                    $query = mysqli_query($conn, $q);

                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        var row = '<tr>' + '<td><?php echo $row['uploadid']; ?></td> <td> <?php echo $row['topicname']; ?> </td> <td> <?php echo $row['difficulty']; ?> </td> <td> <?php echo $row['preperq']; ?> </td > <td> <?php echo $row['apxtime']; ?> </td>' +'<td>' + actions + '</td>' + '</tr>';
                        $("#py table").append(row);
                    <?php
                    }

                    ?>
                }

            )
    </script>

</body>
</html>