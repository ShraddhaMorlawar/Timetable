<?php

session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$tablename=$_SESSION['tablename'];

include('connection.php');

$cnt=0;

$daysOfWeek = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

$sql="select * from ".$tablename;

$result=$conn->query($sql);

if($result->num_rows>0){

    echo"<table border='1'>
    <caption><h1>Login form</h1></caption>
    <tr>
    <th>Time</th>
    <th>Sr.no</th>
    <th>12:00 PM To 12:45 PM</th>
    <th>12:45 PM To 1:30 PM</th>
    <th>15 min</th>
    <th>1:45 PM To 2:30 PM</th>
    <th>2:30 PM To 3:15 PM</th>
    </tr>";

    while($row=$result->fetch_assoc()){
        echo"<tr>
        <td class='days'>".$daysOfWeek[$cnt]."</td>
        <td>".$row['sr']."</td>
        <td>".$row['lecture1']."</td>
        <td>".$row['lecture2']."</td>
        <td>Break</td>
        <td>".$row['lecture3']."</td>
        <td>".$row['lecture4']."</td>
        </tr>";

        $cnt++;
    }

    echo"</table>";
}
else{
    echo"Table is empty";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<link rel="stylesheet" href="style.css">

</head>
<body>

<br><br><br>
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