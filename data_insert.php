<form action="./data_insert.php" method="post">
<input type="text" name="name" placeholder="enter name">
<br />
<br />
<input type="text" name="class" placeholder="enter class">
<br />
<br />
<input type="text" name="marks" placeholder="enter marks">
<br />
<br />
<input type="text" name="gender" placeholder="enter gender">
<br />
<br />
<button type="submit">Add New Student</button>
</form>


<?php

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $mark = $_POST['marks'];
    $gender = $_POST['gender'];
    

    include ("./config.php");
$getStudents = $conn->prepare("
INSERT INTO `student_result` (`name`, `class`, `marks`, `gender`)
VALUES ('$name', '$class', '$mark', '$gender')
");
$students = $getStudents->execute();
if($students){
    echo "record inserted";
}else{
    echo "record not inserted";
}

}



?>