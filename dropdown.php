<?php
include ("./config.php");
$getStudents = $conn->prepare("SELECT * FROM student_result");
$getStudents->execute();
$students = $getStudents->fetchAll();

echo "<select>";
echo "<option>select name</option>";
foreach($students as $student){
echo "<option value=".$student['id'].">".$student['name']."</option>";
}
echo "</select>";


?>