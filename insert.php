<!-- example-01 -->

<!-- <form action="./insert.php" method="post">
<input type="text" name="name" placeholder="enter name">
<br />
<br />
<input type="text" name="color" placeholder="enter color">
<br />
<br />
<input type="text" name="shop" placeholder="enter shop">
<br />
<br />
<input type="text" name="quality" placeholder="enter quality">
<br />
<br />

<button type="submit">Add new product</button>


</form> -->

<!-- example-02 -->
<!-- <form action="./insert.php" method="post">
    <input type="text" placeholder="enter first_name" name="first_name">
     <br />
     <br />
     <input type="text" placeholder="enter last_name" name="last_name">
     <br />
     <br />
     <input type="text" placeholder="enter department" name="department">
     <br />
     <br />
     <input type="text" placeholder="enter gpa" name="gpa">
     <br />
     <br />
     <input type="text" placeholder="enter passing_year" name="passing_year">
     <br />
     <br />
     <button type="submit">Add New Student</button>


</form> -->

<!-- <form action="./insert.php" method="post">
<input type="text" name="name" placeholder="enter name">
<br />
<br />
<input type="text" name="address" placeholder="enter address">
<br />
<br />
<input type="text" name="city" placeholder="enter city">
<br />
<br />
<input type="text" name="pin_code" placeholder="enter pin_code">
<br />
<br />
<input type="text" name="country" placeholder="enter country">
<br />
<br />
<button type="submit">Add new info</button>
</form> -->



<form action="./insert.php" method="post">
    <input type="text" name="name" placeholder="enter name">
    <br />
    <br />
    <input type="text" name="roll" placeholder="enter roll">
    <br />
    <br />
    <input type="text" name="registation" placeholder="enter registation">
    <br />
    <br />
    <input type="text" name="submission" placeholder="enter submission">
    <br />
    <br />
    <button type="submit">Add New</button>
</form>

<?php

include("./config.php");
if (isset(($_POST['name']))) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $registation = $_POST['registation'];
    $submission = $_POST['submission'];

    $pancils = $conn->prepare("
INSERT INTO `pancil` (`name`, `roll`, `registation`, `submission`)
VALUES ('$name', '$roll', '$registation', '$submission')
");
    $result = $pancils->execute();
    if ($result) {
        echo "data insarted";
    } else {
        echo "operation failed";
    };

};







// include ("./config.php");
// if(isset($_POST["name"])){
//     $name = $_POST["name"];
//     $address = $_POST["address"];
//     $city = $_POST["city"];
//     $pin_code = $_POST["pin_code"];
//     $country = $_POST["country"];


// $parson = $conn->prepare("
// INSERT INTO `parson_information` (`name`,`address`,`city`,`pin_code`,`country`)
// VALUES ('$name', '$address', '$city', '$pin_code', '$country')
// ");
// $result = $parson->execute();

// if($result){
//     echo "data inserted";
// }else{
//     echo "operation failed";
// };

// }

// example-02
// if(isset($_POST["first_name"])){
//     $first_name = $_POST["first_name"];
//     $last_name = $_POST["last_name"];
//     $department = $_POST["department"];
//     $gpa = $_POST["gpa"];
//     $passing_year = $_POST["passing_year"];

// include ("./config.php");
// $student = $conn->prepare("
// INSERT INTO `student_result` (`first_name`, `last_name`, `department`, `gpa`, `passing_year`)
// VALUES ('$first_name','$last_name', '$department', '$gpa', '$passing_year')
// ");
// $result = $student->execute();

// if($result){
//     echo "data inserted";
// }else{
//     echo "operation faild";
// }

// }


// example-01
// if(isset($_POST['name'])){
//     $name = $_POST['name'];
//     $color = $_POST['color'];
//     $shop = $_POST['shop'];
//     $quality = $_POST['quality'];


//     include('./config.php');
//     $products = $conn->prepare("
//     INSERT INTO `product`(`name`, `color`, `shop`, `quality`) 
//     VALUES ('$name','$color','$shop',' $quality')
//     ");

//    $result = $products->execute();
//    if($result){
//     echo 'data inserted';
//    }else{
//     echo 'opertion failed';
// }
// }


// include("./config.php");
// $students = $conn->prepare("
//     INSERT INTO `student` (`name`, `year_level`, `section`, `sub_name`)
//     VALUES ('Mahi', '4', 'A', 'computer')
// ");

// $result = $students->execute();

// if($result){
//     echo "data inserted";
// } else{
//     echo "operation failed";
// }

?>