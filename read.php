<?php
/*
include("./config.php");
$getStudents=$conn->prepare("SELECT * FROM student");
$getStudents->execute();
$students=$getStudents->fetchAll();

echo "<table border='1'>";
foreach($students as $student){
    echo "<tr>
    <td>" .$student['Name']."</td>
    <td>" .$student['Gender']."</td>
    <td>" .$student['Department']."</td>
    <td>" .$student['City']."</td>
    </tr>";
}
echo "<table>";
*/

/*
include("./config.php");
$getStudents=$conn->prepare("SELECT * FROM teacher");
$getStudents->execute();
$students=$getStudents->fetchAll();

echo "<table border='1'>";
foreach($students as $student){
    echo "<tr>
    <td>" .$student['Name']."</td>
    <td>" .$student['Name']."</td>
    <td>" .$student['Name']."</td>
    <td>" .$student['Name']."</td>
    <td>" .$student['Name']."</td>
    </tr>";
}
echo "<table>";
*/

/*
include("./config.php");
$getStudents=$conn->prepare("SELECT * FROM student");
$getStudents->execute();
$students=$getStudents->fetchAll();

echo "<table border = '1'>";
foreach($students as $student){
    echo "<tr>
    <td>" .$student["Roll"] ."</td>
    <td>" .$student["Name"] ."</td>
    <td>" .$student["Gender"] ."</td>
    <td>" .$student["GPA"] ."</td>
    <td>" .$student["City"] ."</td>
    </td>";
}
echo "<table>";
*/

/*
include("./config.php");
$getStudents = $conn->prepare("SELECT * FROM teacher");
$getStudents->execute();
$students = $getStudents->fetchAll();

echo "<table border='1'>";
foreach ($students as $student) {
    echo "<tr>
    <td>" . $student["ID"] . "</td>
    <td>" . $student["Name"] . "</td>
    <td>" . $student["Gender"] . "</td>
    <td>" . $student["Department"] . "</td>
    <td>" . $student["City"] . "</td>
     </tr>";
}
echo "<table>";
*/
/*
include("./config.php");
$getStudents = $conn->prepare("SELECT * FROM product");
$getStudents->execute();
$products = $getStudents->fetchAll();
// print_r($products);

echo "<table border = '1'>";
foreach($products as $product) {
    echo "<tr>
    <td>" .$product['name'] ."</td>
    <td>" .$product['color'] ."</td>
    <td>" .$product['shop'] ."</td>
    <td>" .$product['quality'] ."</td>
    </tr>";
}
echo "</border>";
*/

// include("./config.php");
// $getTeachers= $conn->prepare("SELECT * FROM teacher");
// $getTeachers->execute();
// $teachers = $getTeachers->fetchAll();


// echo "<table border='1'>";
// foreach($teachers as $teacher){
//     echo "<tr>
//     <td>" .$teacher['Name'] ."</td>
//     <td>" .$teacher['Gender'] ."</td>
//     <td>" .$teacher['Department'] ."</td>
//     <td>" .$teacher['City'] ."</td>
//     <tr>";
// }
// echo "<table>";



// include("./config.php");

// $getProducts=$conn->prepare("SELECT * FROM product");
// $getProducts->execute();
// $products = $getProducts->fetchAll();

// echo "<table border='1'>";
// foreach($products as $product){
//     echo "<tr>
//     <td>" .$product['name'] ."</td>
//     <td>" .$product['color'] ."</td>
//     <td>" .$product['shop'] ."</td>
//     <td>" .$product['quality'] ."</td>
//     </tr>";
// }
// echo "<table>"


// include("./config.php");
// $getStudents = $conn->prepare("SELECT * FROM student");
// $getStudents->execute();
// $students = $getStudents->fetchAll();

// echo "<table border='1'>";
// foreach ($students as $student) {
//     echo "<tr>
//     <td>" . $student["name"] . "</td>
//     <td>" . $student["year_level"] . "</td>
//     <td>" . $student["section"] . "</td>
//     <td>" . $student["sub_name"] . "</td>
//     <tr>";
// }
// echo "<table>";


// include("./config.php");
// $getStudent = $conn->prepare("SELECT * FROM student");
// $getStudent->execute();
// $students = $getStudent->fetchAll();

// echo "<table border= '1' >";
// foreach($students as $student){
//     echo "<tr>
//     <td>" .$student['name'] ."</td>
//     <td>" .$student['year_level'] ."</td>
//     <td>" .$student['section'] ."</td>
//     <td>" .$student['sub_name'] ."</td>
//     <tr>";
//     }
// echo "<table>";

include("./config.php");

$getStudents=$conn->prepare("SELECT * FROM student");
$getStudents->execute();
$students = $getStudents->fetchAll();

echo "<table border = '1'>";
foreach($students as $student){
    echo "<tr>
    <td>".$student['name'] ."</td>
    <td>".$student['year_level'] ."</td>
    <td>".$student['section'] ."</td>
    <td>".$student['sub_name'] ."</td>
    <tr>";
}
echo "<table>";

?>