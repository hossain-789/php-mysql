<form action="./insert.php" method="post">
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
    <button type="submit">add new student</button>
</form>

<?php


include("./config.php");
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $marks = $_POST['marks'];
    $gender = $_POST['gender'];



    $getStudents = $conn->prepare("
INSERT INTO `student_result`(`name`, `class`, `marks`, `gender`)
VALUES ('$name','$class','$marks','$gender')
");
    $students = $getStudents->execute();
    if ($students) {
        echo "data inserted";
    } else {
        echo "data not inserted";
    }
}


?>