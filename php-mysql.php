<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "data_shop";

$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error){
    die ("some error" .$conn->$connect_error);
}

echo "connect success";
echo "<br />";
echo "<pre>";
$result = $conn->query("show tables")->fetch_All();
print_r($result);


?>