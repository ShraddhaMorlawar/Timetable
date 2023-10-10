<?php

session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$tablename=$_SESSION['tablename'];
$sr=$_SESSION['sr'];

include('connection.php');

$sql="select * from ".$tablename." where sr=".$sr;

$result=$conn->query($sql);

if($result->num_rows>0){

    
echo"<br><br><br><br>
<form action='update_existing_timetable.php' method='post'>
<div class='container'>
	<div class='row'>
		<div class='span5'>
            <table class='table table-striped table-condensed' id='create_table'>
                  <thead>
                  <tr>
                    <th>Time</th>
                    <th>Sr.no.</th>
                    <th>12:00 PM To 12:45 PM</th>
                    <th>12:45 PM To 1:30 PM</th>
                    <th>15 min</th>
                    <th>1:45 PM To 2:30 PM</th>
                    <th>2:30 PM To 3:15 PM</th>                                        
                  </tr>
              </thead>   
              <tbody>";
              
    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    while($row=$result->fetch_assoc())
    {
        echo"<tr>
        <td class='days'><input value=".$daysOfWeek[$sr-1]."></td>
        <td class='days'><input value=".$row['sr']."></td>
        <td><input  name='lecture1".$sr."' value=".$row['lecture1']."></td>
        <td><input name='lecture2".$sr."' value=".$row['lecture2']."></td>
        <td>Break</td>
        <td><input name='lecture3".$sr."' value=".$row['lecture3']."></td>
        <td><input name='lecture4".$sr."' value=".$row['lecture4']."></td>
     </tr>";

    }

    echo"</div></table>
    </div></div></div><br><br><br><div class='button'>
    <input type='submit' value='Update' name='update' id='create_new_table'>
    </form>";
  
    if(isset($_POST['update'])){
        $lecture1_sr=$_POST['lecture1'.$sr];
        $lecture2_sr=$_POST['lecture2'.$sr];
        $lecture3_sr=$_POST['lecture3'.$sr];
        $lecture4_sr=$_POST['lecture4'.$sr];

        $sql="update ".$tablename." set lecture1='".$lecture1_sr."', lecture2='".$lecture2_sr."', lecture3='".$lecture3_sr."', lecture4='".$lecture4_sr."' where sr=".$sr;

        if($conn->query($sql)===true){
            echo"<center><h1><div class='success'>Row updated successfully</div></h1></center>";
        }
        else{
            echo"<center><h1><div class='danger'>Row not updated</div></h1></center>";
        }
    }
}
else{
    echo"Data is not present";
}

echo"</table>";
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<link rel="stylesheet" href="style.css">
</head>
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