<?php

session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];

include('connection.php');

if(isset($_POST['tablename'], $_POST['sr'])){

    $_SESSION['tablename']=$_POST['tablename'];
    $_SESSION['sr']=$_POST['sr'];

    header("location:http://localhost/php_batch/practice/timetable/update_existing_timetable.php");
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

                        <form id="login-form" class="form" action="table_name_to_update.php" method="post">
                            <h3 class="text-center text-info">Update Existing Timetable</h3>
                            <div class="form-group"><br>
                                <label for="username" class="text-info">Table Name:</label><br>
                                <input type="text" name="tablename" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Enter sr.no.:</label><br>
                                <input type="number" name="sr" id="sr" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Enter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>