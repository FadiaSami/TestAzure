
    <?php

//    echo "Welcome". " ".  $_POST["FirstName"]. " ". $_POST["LasttName"];

    var_dump( $_POST );


$serverName = "tickitingSystem-server.mysql.database.azure.com";
$databaseName = "tickitingSystem-database";
$username = "fadia.alaeddin@ltuc.com@tickitingSystem-server";
$password = "MFM@#123456";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    // Perform database operations here
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

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
