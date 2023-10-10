<?php

session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$tablename=$_SESSION['tablename'];

include('connection.php');

if(isset($_POST['create_new_timetable']))
{
    $sr1=$_POST['sr1'];
    $lecture11=$_POST['lecture11'];
    $lecture21=$_POST['lecture21'];
    $lecture31=$_POST['lecture31'];
    $lecture41=$_POST['lecture41'];

    $sr2=$_POST['sr2'];
    $lecture12=$_POST['lecture12'];
    $lecture22=$_POST['lecture22'];
    $lecture32=$_POST['lecture32'];
    $lecture42=$_POST['lecture42'];

    $sr3=$_POST['sr3'];
    $lecture13=$_POST['lecture13'];
    $lecture23=$_POST['lecture23'];
    $lecture33=$_POST['lecture33'];
    $lecture43=$_POST['lecture43'];

    $sr4=$_POST['sr4'];
    $lecture14=$_POST['lecture14'];
    $lecture24=$_POST['lecture24'];
    $lecture34=$_POST['lecture34'];
    $lecture44=$_POST['lecture44'];

    $sr5=$_POST['sr5'];
    $lecture15=$_POST['lecture15'];
    $lecture25=$_POST['lecture25'];
    $lecture35=$_POST['lecture35'];
    $lecture45=$_POST['lecture45'];
    
    $sr6=$_POST['sr6'];
    $lecture16=$_POST['lecture16'];
    $lecture26=$_POST['lecture26'];
    $lecture36=$_POST['lecture36'];
    $lecture46=$_POST['lecture46'];

   $sql="create table ".$tablename." (sr int primary key, lecture1 varchar (50), lecture2 varchar (50), lecture3 varchar (50), lecture4 varchar (50))";

    if($conn->query($sql)===true){

    echo"<center><h1><div class='success'>Table Created Successfully!</div></h1></center><br><br>";

    $result=$conn->prepare("insert into ".$tablename." values(?, ?, ?, ?, ?)");

    $result->bind_param("issss", $sr, $lecture1, $lecture2, $lecture3, $lecture4);
    
    $sr=$sr1;
    $lecture1=$lecture11;
    $lecture2=$lecture21;
    $lecture3=$lecture31;
    $lecture4=$lecture41;
    $result->execute();

    $result=$conn->prepare("insert into ".$tablename." values(?, ?, ?, ?, ?)");

    $result->bind_param("issss", $sr, $lecture1, $lecture2, $lecture3, $lecture4);
    
    $sr=$sr2;
    $lecture1=$lecture12;
    $lecture2=$lecture22;
    $lecture3=$lecture32;
    $lecture4=$lecture42;
    $result->execute();

    $result=$conn->prepare("insert into ".$tablename." values(?, ?, ?, ?, ?)");

    $result->bind_param("issss", $sr, $lecture1, $lecture2, $lecture3, $lecture4);
    
    $sr=$sr3;
    $lecture1=$lecture13;
    $lecture2=$lecture23;
    $lecture3=$lecture33;
    $lecture4=$lecture43;
    $result->execute();

    $result=$conn->prepare("insert into ".$tablename." values(?, ?, ?, ?, ?)");

    $result->bind_param("issss", $sr, $lecture1, $lecture2, $lecture3, $lecture4);
    
    $sr=$sr4;
    $lecture1=$lecture14;
    $lecture2=$lecture24;
    $lecture3=$lecture34;
    $lecture4=$lecture44;
    $result->execute();

    $result=$conn->prepare("insert into ".$tablename." values(?, ?, ?, ?, ?)");

    $result->bind_param("issss", $sr, $lecture1, $lecture2, $lecture3, $lecture4);
    
    $sr=$sr5;
    $lecture1=$lecture15;
    $lecture2=$lecture25;
    $lecture3=$lecture35;
    $lecture4=$lecture45;
    $result->execute();

    $result=$conn->prepare("insert into ".$tablename." values(?, ?, ?, ?, ?)");

    $result->bind_param("issss", $sr, $lecture1, $lecture2, $lecture3, $lecture4);
    
    $sr=$sr6;
    $lecture1=$lecture16;
    $lecture2=$lecture26;
    $lecture3=$lecture36;
    $lecture4=$lecture46;
    $result->execute();

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!--  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="style.css">
</head>
<body>
<br><br><br>

<form action="create_table.php" method="post">

<div class="container">
	<div class="row">
		<div class="span5">
            <table class="table table-striped table-condensed" id="create_table">
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
              <tbody>

                <tr>
                    <td class='days'>Monday</td>
                    <td class='days'><input name="sr1" value="1"></td>
                    <td><input type='text' name='lecture11'></td>
                    <td><input type='text' name='lecture21'></td>
                    <td>Break</td>
                    <td><input type='text' name='lecture31'></td>
                    <td><input type='text' name='lecture41'></td>
                 </tr>
                
                 <tr>
                    <td class='days'>Tuesday</td>
                    <td class='days'><input name="sr2" value="2"></td>
                    <td><input type='text' name='lecture12'></td>
                    <td><input type='text' name='lecture22'></td>
                    <td>Break</td>
                    <td><input type='text' name='lecture32'></td>
                    <td><input type='text' name='lecture42'></td>
                 </tr>
                 <tr>
                    <td class='days'>Wednesday</td>
                    <td class='days'><input name="sr3" value="3"></td>
                    <td><input type='text' name='lecture13'></td>
                    <td><input type='text' name='lecture23'></td>
                    <td>Break</td>
                    <td><input type='text' name='lecture33'></td>
                    <td><input type='text' name='lecture43'></td>
                 </tr>
                 <tr>
                    <td class='days'>Thursday</td>
                    <td class='days'><input name="sr4" value="4"></td>
                    <td><input type='text' name='lecture14'></td>
                    <td><input type='text' name='lecture24'></td>
                    <td>Break</td>
                    <td><input type='text' name='lecture34'></td>
                    <td><input type='text' name='lecture44'></td>
                 </tr>
                 <tr>
                    <td class='days'>Friday</td>
                    <td class='days'><input name="sr5" value="5"></td>
                    <td><input type='text' name='lecture15'></td>
                    <td><input type='text' name='lecture25'></td>
                    <td>Break</td>
                    <td><input type='text' name='lecture35'></td>
                    <td><input type='text' name='lecture45'></td>
                 </tr>

                 <tr>
                    <td class='days'>Saturday</td>
                    <td class='days'><input name="sr6" value="6"></td>
                    <td><input type='text' name='lecture16'></td>
                    <td><input type='text' name='lecture26'></td>
                    <td>Break</td>
                    <td><input type='text' name='lecture36'></td>
                    <td><input type='text' name='lecture46'></td>
                 </tr>

              </tbody>
            </table>
            </div>
	</div>
</div>

<br><br><br>
<div class="button">
    <input type="submit" value="Create" name="create_new_timetable" id="create_new_table">
    </div>

    </form>

    <br><br><br><br>
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