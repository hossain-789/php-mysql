<?php
/*
$host = "localhost";
$username = "root";
$password = null;


try {
    $conn = new PDO("mysql:host=$host; dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connect done";
} catch (PDOException $err) {
    echo "connect failed $err->getMessage()";
}
*/
/*
try{
    $conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connect success";
} catch (PDOException $err){
    echo "connect failed $err->getMessage()";
}
 */

/*
$host = "localhost";
$username = "root";
$password = null; 

try{
$conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "connection success";

} catch(PDOException $err){
    echo "connect failed $err->getMessage()";
}

echo "<br/>";

$result = $conn->query("show tables");
while($row = $result->fetch(PDO::FETCH_NUM)){
    echo "<pre>";
    print_r($row);
    echo "</pre>";
} */

/*
$host = "localhost";
$username = "root";
$password = null;

try{
    $conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connect done";
}catch(PDOException $err){
    echo "connect faild $err->getMessage()";
}

echo "<br/>";

$result = $conn->query("show tables");
while($row = $result->fetch(PDO::FETCH_NUM)){
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
*/
/*
$host = "localhost";
$username = "root";
$password = null;

try{
    $conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection success";
}catch(PDOException $err){
    echo "connection failed $err->getMessage()";
}

echo "<br/>";

$result = $conn->query("show tables");
while($row = $result->fetch(PDO::FETCH_NUM)){
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
*/

/*
$host = "localhost";
$username = "root";
$password = null;

try{
    $conn = new PDO("mysql:host=$host; dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection success";
}catch(PDOException $err){
    echo "connect failed .$err->getMessage()";
}
echo "<br/>";

$result = $conn->query("show tables");
while($row = $result->fetch(PDO::FETCH_NUM)){
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
*/


$host = "localhost";
$username = "root";
$password = null;

try{
    $conn= new PDO("mysql:host=$host;dbname=college",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    echo "connect success";
}catch(PDOException $err){
    echo "connect failed $err->getMessage()";
}

echo "<br/>";

$resul = $conn->query("show tables");
while($row= $resul->fetch(PDO::FETCH_NUM)){
    echo "<pre>";
    print_r($row);
    echo "</pre>";

}


?>