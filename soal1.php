<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <td>Input Array</td>
                <td>:</td>
                <td><input type="text"name="array"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="proses" class="btn btn-primary">Proses</button></td>
            </tr>
        </table>
<?php
 if(isset($_POST['proses'])){
    $array =$_POST['array'];

    echo "Input : ".$array."<br>";
     
    echo "Output : <br>";
 }
?>
</body>
</html>