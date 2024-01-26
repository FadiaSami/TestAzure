<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

//    echo "Welcome". " ".  $_POST["FirstName"]. " ". $_POST["LasttName"];

    var_dump( $_POST );
    $server_name = "tickitingsystem-server.mysql.database.azure.com";
    $username = "pelihrdaqx";
    $password = "Masa@#12345";
    $db_name = "tickitingsystem-database";

    $conn = mysqli_connect($server_name,  $username,  $password , $db_name) or die ("connection failed");
    $name = $_POST["stdName"];
    $age = $_POST["stdAge"];
    $password = $_POST["Password"];
    $sql = "insert into student (stdName, stdAge,password) values ('$name', '$age', '$password')";
    $result = mysqli_query ($conn,$sql);

    if ($result){
        echo "insterted";
    }
    else
        echo mysqli_error($conn);
    ?>
</body>
</html>
