<?php

session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];

include('connection.php');

echo"<center><h1><div class='success'>Successfully loged in !😁</div></h1></center><br><br><br>";

if(isset($_POST['display_timetable'])){
    header("location:http://localhost/php_batch/practice/timetable/display_existing_timetable.php");
}

if(isset($_POST['create_new_timetable'])){
    header("location:http://localhost/php_batch/practice/timetable/new_timetable_name.php");
}

if(isset($_POST['update_existing_timetable'])){
    header("location:http://localhost/php_batch/practice/timetable/table_name_to_update.php");
}

if (isset($_POST['log_out'])) {
    session_destroy(); 
    header("location: http://localhost/php_batch/practice/timetable/index.php"); 
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="buttons">
    <form action="timetable.php" method="post">
    <input type="submit" value="Display Existing Timetable" name="display_timetable" id="display_table">
    <input type="submit" value="Create A New Timetable" name="create_new_timetable" id="create_new_table">
    <input type="submit" value="Update Existing Timetable" name="update_existing_timetable" id="update_existing_table">
    <input type="submit" value="Log Out" name="log_out" id="log_out">
    </form>
</div>
<br><br><br>
</body>
</html>