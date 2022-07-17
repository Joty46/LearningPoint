<?php $conn = mysqli_connect("localhost", "root", "", "web");
$q = "select * from user";
$query = mysqli_query($conn, $q);

?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://kit.fontawesome.com/31a20b87d9.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            body {
                color: #404E67;
                background: #F5F7FA;
                font-family: 'Open Sans', sans-serif;
            }

            .table-wrapper {
                width: 700px;
                margin: 30px auto;
                background: #fff;
                padding: 20px;
                box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            }

            .table-title {
                padding-bottom: 10px;
                margin: 0 0 10px;
            }

            .table-title h2 {
                margin: 6px 0 0;
                font-size: 22px;
            }

            .table-title .add-new {
                float: right;
                height: 30px;
                font-weight: bold;
                font-size: 12px;
                text-shadow: none;
                min-width: 100px;
                border-radius: 50px;
                line-height: 13px;
            }

            .table-title .add-new i {
                margin-right: 4px;
            }

            table.table {
                table-layout: fixed;
            }

            table.table tr th,
            table.table tr td {
                border-color: #e9e9e9;
            }

            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }

            table.table th:last-child {
                width: 100px;
            }

            table.table td a {
                cursor: pointer;
                display: inline-block;
                margin: 0 5px;
                min-width: 24px;
            }

            table.table td a.add {
                color: #27C46B;
            }

            table.table td a.edit {
                color: #FFC107;
            }

            table.table td a.delete {
                color: #E34724;
            }

            table.table td i {
                font-size: 19px;
            }

            table.table td a.add i {
                font-size: 24px;
                margin-right: -1px;
                position: relative;
                top: 3px;
            }

            table.table .form-control {
                height: 32px;
                line-height: 32px;
                box-shadow: none;
                border-radius: 2px;
            }

            table.table .form-control.error {
                border-color: #f50000;
            }

            table.table td .add {
                display: none;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked admin-menu">
                        <li class="active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Home</a></li>
                        <li><a href="" data-target-id="users"><i class="fa fa-user fa-fw"></i>Users</a></li>
                        <li><a href="" data-target-id="web"><i class="fa-solid fa-code"></i> Web</a></li>
                        <li><a href="" data-target-id="ds"><i class="fa-solid fa-sitemap"></i> Data Structure</a></li>
                        <li><a href="" data-target-id="aa"><i class="fa-solid fa-book"></i> Algorithm Analysis</a></li>
                        <li><a href="" data-target-id="oop"><i class="fa-solid fa-cube"></i> Object Oriented Programming</a></li>
                        <li><a href="" data-target-id="ad"><i class="fa-brands fa-android"></i> Android Development</a></li>
                        <li><a href="" data-target-id="py"><i class="fa-brands fa-python"></i> Python</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-9 well admin-content" id="home"><a href="homePage.php">
                        <h1>Go Back?</h1>
                    </a></div>
                <div class="col-md-9 well admin-content" id="users">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2>Users <b>Details</b></h2>
                                    </div>
                                    <div class="col-sm-4"><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>Add New</button></div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Admin</td>
                                        <td>admin@gmail.com</td>
                                        <td><a class="add" title="Add" data-toggle="tooltip"><i class="fa-solid fa-plus"></i></a><a class="delete" title="Delete" data-toggle="tooltip"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 well admin-content" id="web">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2> <b>Web Topics Details</b></h2>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Upload ID</th>
                                        <th>Topic name</th>
                                        <th>Difficulty</th>
                                        <th>Prerequisite</th>
                                        <th>Approximate Reading Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 well admin-content" id="ds">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2><b>Data Structure Details</b></h2>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Upload ID</th>
                                        <th>Topic name</th>
                                        <th>Difficulty</th>
                                        <th>Prerequisite</th>
                                        <th>Approximate Reading Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 well admin-content" id="aa">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2><b>Algorithm Analysis Details</b></h2>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Upload ID</th>
                                        <th>Topic name</th>
                                        <th>Difficulty</th>
                                        <th>Prerequisite</th>
                                        <th>Approximate Reading Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 well admin-content" id="oop">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2><b>OOP Details</b></h2>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Upload ID</th>
                                        <th>Topic name</th>
                                        <th>Difficulty</th>
                                        <th>Prerequisite</th>
                                        <th>Approximate Reading Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 well admin-content" id="ad">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2><b>Android Development Details</b></h2>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Upload ID</th>
                                        <th>Topic name</th>
                                        <th>Difficulty</th>
                                        <th>Prerequisite</th>
                                        <th>Approximate Reading Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 well admin-content" id="py">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2><b>Python Details</b></h2>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Upload ID</th>
                                        <th>Topic name</th>
                                        <th>Difficulty</th>
                                        <th>Prerequisite</th>
                                        <th>Approximate Reading Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                    var navItems = $('.admin-menu li > a');
                    var navListItems = $('.admin-menu li');
                    var allWells = $('.admin-content');
                    var allWellsExceptFirst = $('.admin-content:not(:first)');

                    allWellsExceptFirst.hide();

                    navItems.click(function(e) {
                            e.preventDefault();
                            navListItems.removeClass('active');
                            $(this).closest('li').addClass('active');

                            allWells.hide();
                            var target = $(this).attr('data-target-id');
                            $('#' + target).show();
                        }

                    );
                }

            );

            //User Part
            $(document).ready(function() {
                    $('#users [data-toggle="tooltip"]').tooltip();
                    var actions = $("#users table td:last-child").html();

                    $("#users .add-new").click(function() {
                            $(this).attr("disabled", "disabled");
                            var index = $("#users table tbody tr:last-child").index();
                            var row = '<tr>' + '<td><input type="text" class="form-control" name="name" id="name"></td>' + '<td><input type="text" class="form-control" name="department" id="department"></td>' + '<td>' + actions + '</td>' + '</tr>';
                            $("#users table").append(row);
                            $("#users table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                            $('#users [data-toggle="tooltip"]').tooltip();
                        }

                    );

                    $(document).on("click", "#users .add", function() {
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
                                let arr = [];
                                input.each(function(i) {
                                        arr.push($(this).val());
                                        $(this).parent("td").html($(this).val());
                                    }
                                );
                                $.post('adminadd.php', {
                                "arr": JSON.stringify(arr)
                    },
                    function() {
                        console.log("helo");
                    }
                    );
                                $(this).parents("tr").find(".add").toggle();
                                $("#users .add-new").removeAttr("disabled");
                            }
                        }

                    );

                    $(document).on("click", "#users .delete", function() {
                        $.post('admindelete.php', {
                        "k": $(this).parents("tr").find(":first-child").text(),
                        "type": "user",
                        "pk": "username"
                    },
                    function() {
                        console.log("helo");
                    }
                );
                            $(this).parents("tr").remove();
                            $(".add-new").removeAttr("disabled");
                        }

                    );
                }

            );

            $(document).ready(function() {
                    var actions = $("#users table td:last-child").html();

                    <?php while ($row = mysqli_fetch_assoc($query)) {
                        if ($row['username'] === 'Admin') {
                            continue;
                        }

                    ?>
                        var row = '<tr>' + '<td><?php echo $row['username']; ?></td> <td> <?php echo $row['email']; ?> </td>' + '<td>' + actions + '</td>' + '</tr>';
                        $("#users table").append(row);
                    <?php
                    }

                    ?>
                }

            ) 
            

            // Web Part

            $(document).ready(function() {
                    $('#web [data-toggle="tooltip"]').tooltip();
                    var actions = $("#users table td:last-child").html();

                    // Append table with add row form on add new button click
                    $("#web .add-new").click(function() {
                            $(this).attr("disabled", "disabled");
                            var index = $("#web table tbody tr:last-child").index();
                            var row = '<tr>' + '<td><input type="text" class="form-control" name="uid" id="uid"></td>' + '<td><input type="text" class="form-control" name="topic" id="topic"></td>' + '<td><input type="text" class="form-control" name="dif" id="dif"></td>' + '<td><input type="text" class="form-control" name="prereq" id="prereq"></td>' + '<td><input type="text" class="form-control" name="time" id="time"></td>' + '<td>' + actions + '</td>' + '</tr>';
                            $("#web table").append(row);
                            $("#web table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                            $('#web [data-toggle="tooltip"]').tooltip();
                        }

                    );

                    $(document).on("click", "#web .add", function() {
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
                                $("#web .add-new").removeAttr("disabled");
                            }
                        }

                    );

                    $(document).on("click", "#web .delete", function() {
                        $.post('admindelete.php', {
                        "k": $(this).parents("tr").find(":first-child").text(),
                        "type": "courses",
                        "pk": "uploadid"
                    },
                    function() {
                        console.log("helo");
                    }
                );
                            $(this).parents("tr").remove();
                            $(".add-new").removeAttr("disabled");
                        }

                    );
                }

            );

            $(document).ready(function() {
                    var actions = $("#users table td:last-child").html();
                    <?php $q = "select * from courses where coursename='Web'";
                    $query = mysqli_query($conn, $q);

                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        var row = '<tr>' + '<td><?php echo $row['uploadid']; ?></td> <td> <?php echo $row['topicname']; ?> </td> <td> <?php echo $row['difficulty']; ?> </td> <td> <?php echo $row['preperq']; ?> </td > <td> <?php echo $row['apxtime']; ?> </td>' +'<td>' + actions + '</td>' + '</tr>';
                        $("#web table").append(row);
                    <?php
                    }

                    ?>
                }

            )


            // Data structure Part
            $(document).ready(function() {
                    $('#ds [data-toggle="tooltip"]').tooltip();
                    var actions = $("#users table td:last-child").html();

                    // Append table with add row form on add new button click
                    $("#ds .add-new").click(function() {
                            $(this).attr("disabled", "disabled");
                            var index = $("#ds table tbody tr:last-child").index();
                            var row = '<tr>' + '<td><input type="text" class="form-control" name="uid" id="uid"></td>' + '<td><input type="text" class="form-control" name="topic" id="topic"></td>' + '<td><input type="text" class="form-control" name="dif" id="dif"></td>' + '<td><input type="text" class="form-control" name="prereq" id="prereq"></td>' + '<td><input type="text" class="form-control" name="time" id="time"></td>' + '<td>' + actions + '</td>' + '</tr>';
                            $("#ds table").append(row);
                            $("#ds table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                            $('#ds [data-toggle="tooltip"]').tooltip();
                        }

                    );

                    $(document).on("click", "#ds .add", function() {
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
                                $("#ds .add-new").removeAttr("disabled");
                            }
                        }

                    );

                    $(document).on("click", "#ds .delete", function() {
                        $.post('admindelete.php', {
                        "k": $(this).parents("tr").find(":first-child").text(),
                        "type": "courses",
                        "pk": "uploadid"
                    },
                    function() {
                        console.log("helo");
                    }
                );
                            $(this).parents("tr").remove();
                            $(".add-new").removeAttr("disabled");
                        }

                    );
                }

            );

            $(document).ready(function() {
                    var actions = $("#users table td:last-child").html();
                    <?php $q = "select * from courses where coursename='Data Structure'";
                    $query = mysqli_query($conn, $q);

                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        var row = '<tr>' + '<td><?php echo $row['uploadid']; ?></td> <td> <?php echo $row['topicname']; ?> </td> <td> <?php echo $row['difficulty']; ?> </td> <td> <?php echo $row['preperq']; ?> </td > <td> <?php echo $row['apxtime']; ?> </td>' +'<td>' + actions + '</td>' + '</tr>';
                        $("#ds table").append(row);
                    <?php
                    }

                    ?>
                }

            )

            // Algorithm Analysis part

            $(document).ready(function() {
                    $('#aa [data-toggle="tooltip"]').tooltip();
                    var actions = $("#users table td:last-child").html();

                    // Append table with add row form on add new button click
                    $("#aa .add-new").click(function() {
                            $(this).attr("disabled", "disabled");
                            var index = $("#aa table tbody tr:last-child").index();
                            var row = '<tr>' + '<td><input type="text" class="form-control" name="uid" id="uid"></td>' + '<td><input type="text" class="form-control" name="topic" id="topic"></td>' + '<td><input type="text" class="form-control" name="dif" id="dif"></td>' + '<td><input type="text" class="form-control" name="prereq" id="prereq"></td>' + '<td><input type="text" class="form-control" name="time" id="time"></td>' + '<td>' + actions + '</td>' + '</tr>';
                            $("#aa table").append(row);
                            $("#aa table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                            $('#aa [data-toggle="tooltip"]').tooltip();
                        }

                    );

                    $(document).on("click", "#aa .add", function() {
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
                                $("#aa .add-new").removeAttr("disabled");
                            }
                        }

                    );

                    $(document).on("click", "#aa .delete", function() {
                        $.post('admindelete.php', {
                        "k": $(this).parents("tr").find(":first-child").text(),
                        "type": "courses",
                        "pk": "uploadid"
                    },
                    function() {
                        console.log("helo");
                    }
                );
                            $(this).parents("tr").remove();
                            $(".add-new").removeAttr("disabled");
                        }

                    );
                }

            );

            $(document).ready(function() {
                    var actions = $("#users table td:last-child").html();
                    <?php $q = "select * from courses where coursename='Algorithm Analysis'";
                    $query = mysqli_query($conn, $q);

                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        var row = '<tr>' + '<td><?php echo $row['uploadid']; ?></td> <td> <?php echo $row['topicname']; ?> </td> <td> <?php echo $row['difficulty']; ?> </td> <td> <?php echo $row['preperq']; ?> </td > <td> <?php echo $row['apxtime']; ?> </td>' +'<td>' + actions + '</td>' + '</tr>';
                        $("#aa table").append(row);
                    <?php
                    }

                    ?>
                }

            )
           

            // Object Oriented Programming part
            $(document).ready(function() {
                    $('#oop [data-toggle="tooltip"]').tooltip();
                    var actions = $("#users table td:last-child").html();

                    // Append table with add row form on add new button click
                    $("#oop .add-new").click(function() {
                            $(this).attr("disabled", "disabled");
                            var index = $("#oop table tbody tr:last-child").index();
                            var row = '<tr>' + '<td><input type="text" class="form-control" name="uid" id="uid"></td>' + '<td><input type="text" class="form-control" name="topic" id="topic"></td>' + '<td><input type="text" class="form-control" name="dif" id="dif"></td>' + '<td><input type="text" class="form-control" name="prereq" id="prereq"></td>' + '<td><input type="text" class="form-control" name="time" id="time"></td>' + '<td>' + actions + '</td>' + '</tr>';
                            $("#oop table").append(row);
                            $("#oop table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                            $('#oop [data-toggle="tooltip"]').tooltip();
                        }

                    );

                    $(document).on("click", "#oop .add", function() {
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
                                $("#oop .add-new").removeAttr("disabled");
                            }
                        }

                    );

                    $(document).on("click", "#oop .delete", function() {
                        $.post('admindelete.php', {
                        "k": $(this).parents("tr").find(":first-child").text(),
                        "type": "courses",
                        "pk": "uploadid"
                    },
                    function() {
                        console.log("helo");
                    }
                );
                            $(this).parents("tr").remove();
                            $(".add-new").removeAttr("disabled");
                        }

                    );
                }

            );

            $(document).ready(function() {
                    var actions = $("#users table td:last-child").html();
                    <?php $q = "select * from courses where coursename='Object Oriented Programming'";
                    $query = mysqli_query($conn, $q);

                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        var row = '<tr>' + '<td><?php echo $row['uploadid']; ?></td> <td> <?php echo $row['topicname']; ?> </td> <td> <?php echo $row['difficulty']; ?> </td> <td> <?php echo $row['preperq']; ?> </td > <td> <?php echo $row['apxtime']; ?> </td>' +'<td>' + actions + '</td>' + '</tr>';
                        $("#oop table").append(row);
                    <?php
                    }

                    ?>
                }

            )

            // Android Development
            $(document).ready(function() {
                    $('#ad [data-toggle="tooltip"]').tooltip();
                    var actions = $("#users table td:last-child").html();

                    // Append table with add row form on add new button click
                    $("#ad .add-new").click(function() {
                            $(this).attr("disabled", "disabled");
                            var index = $("#ad table tbody tr:last-child").index();
                            var row = '<tr>' + '<td><input type="text" class="form-control" name="uid" id="uid"></td>' + '<td><input type="text" class="form-control" name="topic" id="topic"></td>' + '<td><input type="text" class="form-control" name="dif" id="dif"></td>' + '<td><input type="text" class="form-control" name="prereq" id="prereq"></td>' + '<td><input type="text" class="form-control" name="time" id="time"></td>' + '<td>' + actions + '</td>' + '</tr>';
                            $("#ad table").append(row);
                            $("#ad table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                            $('#ad [data-toggle="tooltip"]').tooltip();
                        }

                    );

                    $(document).on("click", "#ad .add", function() {
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
                                $("#ad .add-new").removeAttr("disabled");
                            }
                        }

                    );

                    $(document).on("click", "#ad .delete", function() {
                        $.post('admindelete.php', {
                        "k": $(this).parents("tr").find(":first-child").text(),
                        "type": "courses",
                        "pk": "uploadid"
                    },
                    function() {
                        console.log("helo");
                    }
                );
                            $(this).parents("tr").remove();
                            $(".add-new").removeAttr("disabled");
                        }

                    );
                }

            );

            $(document).ready(function() {
                    var actions = $("#users table td:last-child").html();
                    <?php $q = "select * from courses where coursename='Android Development'";
                    $query = mysqli_query($conn, $q);

                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        var row = '<tr>' + '<td><?php echo $row['uploadid']; ?></td> <td> <?php echo $row['topicname']; ?> </td> <td> <?php echo $row['difficulty']; ?> </td> <td> <?php echo $row['preperq']; ?> </td > <td> <?php echo $row['apxtime']; ?> </td>' +'<td>' + actions + '</td>' + '</tr>';
                        $("#ad table").append(row);
                    <?php
                    }

                    ?>
                }

            )


            $(document).ready(function() {
                    $('#py [data-toggle="tooltip"]').tooltip();
                    var actions = $("#users table td:last-child").html();

                    // Append table with add row form on add new button click
                    $("#py .add-new").click(function() {
                            $(this).attr("disabled", "disabled");
                            var index = $("#py table tbody tr:last-child").index();
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

                    $(document).on("click", "#py .delete", function() {
                        $.post('admindelete.php', {
                        "k": $(this).parents("tr").find(":first-child").text(),
                        "type": "courses",
                        "pk": "uploadid"
                    },
                    function() {
                        console.log("helo");
                    }
                );
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