<?php
if(isset($_POST['input1'])){
    $input1=$_POST['input1'];

    echo $input1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="input_table.php" method="post">
        <table border='1'>
            <tr>
                <td><input type="text" name="input1"></td>
            </tr>
        </table>
    </form>
</body>
</html>