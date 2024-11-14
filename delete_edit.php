<?php
// include ("./config.php");
// $getStudents = $conn->prepare("SELECT * FROM student_result");
// $getStudents->execute();
// $students = $getStudents->fetchAll();

// echo "<table border = '1'>";
// foreach ($students as $student){
//     echo "<tr>
//     <td>" .$student['name']."</td>
//     <td>" .$student['class']."</td>
//     <td>" .$student['marks']."</td>
//     <td>" .$student['gender']."</td>
//     <td><form method='post'>
//     <button name=delete value=".$student['id'].">delete</button>
//     </form></td>
//     </tr>";
// }
// echo "</table>";
// if(isset($_POST['delete'])){
//     $id = $_POST['delete'];
//     $getStudents = $conn->prepare("delete from student_result where id='$id'");
    
//     if($getStudents->execute()){
//         echo "record inserted";
//     }else {
//         echo "record not edit";
//     }
// }


include ("./config.php");
$getStudents = $conn->prepare("SELECT * FROM student_result");
$getStudents->execute();
$students = $getStudents->fetchAll();

echo "<table border='1'>";
foreach($students as $student){
    echo "<tr> 
    <td>".$student['name']."</td>
    <td>".$student['class']."</td>
    <td>".$student['marks']."</td>
    <td>".$student['gender']."</td>
    <td><form method='post'>
    <button name=delete value=".$student['id'].">delete</button>
    </form></td>
    <td><a href='update.php?id=".$student['id']."'>edit</a></td>
    
    <tr>";
}
echo "</table>";


if(isset($_POST['delete'])){
    $id= $_POST['delete'];
    $getStudents = $conn->prepare("delete from student_result where id='$id'");
    
    if($getStudents->execute()){
        echo "record inserted";
    } else{
        echo "record not inserted";
    }

}




?>