<?php
// $host = "localhost";
// $username = "root";
// $password = null;
// $database = "data_shop";

// $conn = new mysqli($host, $username, $password, $database);
// if($conn->connect_error){
//     die ("some error" .$conn->$connect_error);
// }
//     echo "connect success";
//     echo "<br />";

// $result = $conn->query("show tables")->fetch_all();
// echo "<pre>";
// print_r($result);


// $host = "localhost";
// $username= "root";
// $password = null;
// $database = "data_shop";

// $conn= new mysqli($host, $username, $password, $database);
// if($conn->connect_error){
//     die ("some error" .$$conn->$connect_error);
// }
// echo "connect success";
// $result = $conn->query("show tables")->fetch_ALL();
// echo "<pre>";
// print_r($result);




$host = "localhost";
$username = "root";
$password = null;
$database = "data_shop";

$conn= new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die("some error" .$conn->$connect_error);
}
echo "connect success";

$result = $conn->query("show tables")->fetch_ALL();
echo "<pre>";
print_r($result);
?>
