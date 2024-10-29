
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
?>
