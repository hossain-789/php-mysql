<?php

// include("./config.php");

// $getStudents=$conn->prepare("SELECT * FROM student_result");
// $getStudents->execute();
// $students= $getStudents->fetchAll();

// echo "<table border='1'>";
// foreach($students as $result){
//     echo "<tr>
//     <td>".$result['name']."</td>
//     <td>".$result['class']."</td>
//     <td>".$result['marks']."</td>
//     <td>".$result['gender']."</td>
//     <tr>";
// }
// echo "<table>";


// include("./config.php");

// $getStudents = $conn->prepare("SELECT * FROM student_result");
// $getStudents->execute();
// $students = $getStudents->fetchAll();
// echo "<br />";

// echo "<table border= '1'>";
// foreach($students as $student){
//     echo "<tr>
//     <td>".$student['name']."</td>
//     <td>".$student['class']."</td>
//     <td>".$student['marks']."</td>
//     <td>".$student['gender']."</td>
//     </tr>";
// }
// echo "</table>";

include("./config.php");
$getStudents = $conn->prepare("SELECT * FROM student_result");
$getStudents->execute();
$students = $getStudents->fetchAll();
echo "<br .>";

echo "<table border= '1'>";
foreach($students as $student){
    echo "<tr>
    <td>".$student['name']."</td>
    <td>".$student['class']."</td>
    <td>".$student['marks']."</td>
    <td>".$student['gender']."</td>
    <tr>";
}
echo "</table>";
?>