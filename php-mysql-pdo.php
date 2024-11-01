<?php

// $host = "localhost";
// $username = "root";
// $password = null;

// try{
//     $conn= new PDO("mysql:host=$host; dbname=data_shop", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "connect done";
// }catch(PDOException $err){
//     echo "connect failed" .$err->getMessage();
// }
// echo "<br />";

// $result = $conn->query("show tables");
// while ($row = $result->fetch(PDO::FETCH_NUM)){
//     echo "<pre>";
//     print_r($row);
// }



// $host = "localhost";
// $username = "root";
// $password = null;

// try{
//     $conn = new PDO("mysql:host=$host;dbname=data_shop", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "connect done";
// }catch(PDOException $err){
//     echo "connect failed" .$err->getMessage();
// }
// echo "<br />";

// $result = $conn->query("show tables");
// while ($row = $result->fetch(PDO::FETCH_NUM)){
//     echo "<pre>";
//     print_r($row);
// }


$host = "localhost";
$username = "root";
$password = null;

try{
    $conn = new PDO("mysql:host=$host;dbname=data_shop", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection done";
}catch(PDOException $err){
    echo "connection failed" .$err->getMessage;
}
echo "<br />";

$result = $conn->query("show tables");
while ($row = $result->fetch(PDO::FETCH_NUM)){
    echo "<pre>";
    print_r($row);
}







?>