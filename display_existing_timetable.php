<?php

session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];

include('connection.php');

if(isset($_POST['tablename'])){

    $_SESSION['tablename']=$_POST['tablename'];
    header("location:http://localhost/php_batch/practice/timetable/table_displayed.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div id="login">
        <div class="container"> 
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form id="login-form" class="form" action="display_existing_timetable.php" method="post">
                            <h3 class="text-center text-info">Display Existing Timetable</h3>
                            <div class="form-group"><br>
                                <label for="username" class="text-info">Table Name:</label><br>
                                <input type="text" name="tablename" id="username" class="form-control">
                            </div><br>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Display">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<br><br><br><br>


<div class="buttons">
    <form action="timetable.php" method="post">
    <input type="submit" value="Display Existing Timetable" name="display_timetable" id="display_table">
    <input type="submit" value="Create A New Timetable" name="create_new_timetable" id="create_new_table">
    <input type="submit" value="Update Existing Timetable" name="update_existing_timetable" id="update_existing_table">
    <input type="submit" value="Log Out" name="log_out" id="log_out">
    </form>
</div>
</body>
</html>