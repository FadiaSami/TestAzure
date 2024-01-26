
    <?php

//    echo "Welcome". " ".  $_POST["FirstName"]. " ". $_POST["LasttName"];

    var_dump( $_POST );
    $server_name = "tickitingsystem-server.mysql.database.azure.com";
    $username = "pelihrdaqx";
    $password = "MFM@#12345";
    $db_name = "tickitingsystem-database";

try {
	echo "ddd";
   $con = mysqli_init();
//mysqli_ssl_set($con,NULL,NULL, "", NULL, NULL);
$conn = mysqli_connect("mytestsitefadia-server.mysql.database.azure.com", "ifdtuzzxgb", "MFM@#12345", "mytestsitefadia-database");
    echo "Connected successfully";

    // Perform database operations here
} catch (PDOException $e) {
    die("Connection failed: " . $con->getMessage());
}

    //$conn = mysqli_connect($server_name,  $username,  $password , $db_name) or die ("connection failed");
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
