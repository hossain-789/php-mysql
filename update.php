<?php
// include("./config.php");
// if(isset($_GET['id'])){
//     $id=$_GET['id'];
//     $getStudents = $conn->prepare("SELECT * FROM student_result where id='$id'");
//     $getStudents->execute();
//     $students = $getStudents->fetchALL();
//     $name = $students[0]['name'];
//     $class = $students[0]['class'];
//     $marks = $students[0]['marks'];
//     $gender = $students[0]['gender'];
// }

// include("./config.php");
// if(isset($_GET['id'])){
//     $id= $_GET['id'];
//     $getStudents = $conn->prepare("SELECT * FROM student_result where id='$id'");
//     $getStudents->execute();
//     $students = $getStudents->fetchALL();
//     $name = $students[0]['name'];
//     $class = $students[0]['class'];
//     $marks = $students[0]['marks'];
//     $gender = $students[0]['gender'];
// }


include("./config.php");

// if(isset($_GET['id'])){
//     $id = $_GET['id'];
//     $getStudents = $conn->prepare("SELECT * FROM student_result where id='$id'");
// $getStudents->execute();

// $students= $getStudents->fetchAll();
// $name = $students[0]['name'];
// $class = $students[0]['class'];
// $marks = $students[0]['marks'];
// $gender = $students[0]['gender'];
// }

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getStudents = $conn->prepare("SELECT * FROM student_result where id='$id'");
    $getStudents->execute();

    $students = $getStudents->fetchAll();
    $name = $students[0]['name'];
    $class = $students[0]['class'];
    $marks = $students[0]['marks'];
    $gender = $students[0]['gender'];
}


?>
<form action="" method="post">
    <input type="text" value="<?php echo $name; ?>" name="name">
    <br /><br />
    <input type="text" value="<?php echo $class; ?>" name="class">
    <br /><br />
    <input type="text" value="<?php echo $marks; ?>" name="marks">
    <br /><br />
    <input type="text" value="<?php echo $gender; ?>" name="gender">
    <br /><br />
    <button type="submit" name="update" value="<?php echo $id; ?>">Update Student Data</button>
</form>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['update'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $marks = $_POST['marks'];
    $gender = $_POST['gender'];
    $updateStudent = $conn->prepare("update student_result set name='$name', class='$class', marks='$marks', gender='$gender' where id='$id'");

    if ($updateStudent->execute()) {
        header("location:delete_edit.php");
    } else {
        echo "update failed";
    }

}



?>