<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Refresh" content="0; url='./index.php'" />
    <title>Document</title>
</head>
<body>
<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "todolist";
    $id = (int)$_GET['id']; //FIX SQL INJECTION
    $connect = mysqli_connect($server,$user,$password,$db);
    
    if($query = mysqli_query($connect,"DELETE FROM list WHERE id=".$id.";")){
        echo "Success";
    }else{
        echo "Failure" . mysqli_error($connect);
    }
    
?>
</body>
</html>