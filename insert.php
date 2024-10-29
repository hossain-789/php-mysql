<!-- <form action="./insert.php" method="post">

    <input type="text" placeholder="enter name" name="name">
    <br />
    <br />
    <input type="text" placeholder="enter color" name="color">
    <br />
    <br />
    <input type="text" placeholder="enter shop" name="shop">
    <br />
    <br />
    <input type="text" placeholder="enter quality" name="quality">
    <br />
    <br />

    <button type="submit">Add New product</button>

</form> -->

<form action="./insert.php" method="post">
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


</form>

<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $color = $_POST['color'];
    $shop = $_POST['shop'];
    $quality = $_POST['quality'];


    include('./config.php');
    $products = $conn->prepare("
    INSERT INTO `product`(`name`, `color`, `shop`, `quality`) 
    VALUES ('$name','$color','$shop',' $quality')
    ");

   $result = $products->execute();
   if($result){
    echo 'data inserted';
   }else{
    echo 'opertion failed';
}
}


// if(isset($_POST['name'])){
//     $name = $_POST['name'];
//     $color = $_POST['color'];
//     $shop = $_POST['shop'];
//     $quality = $_POST['quality'];

// include("./config.php");
// $product = $conn->prepare("
// INSERT INTO `product` ( `name`, `color`, `shop`, `quality`)
// VALUES ( '$name', '$color', '$shop', '$quality')
// ");

//     $result = $product->execute();
//     if ($result) {
//         echo "data inserted";
//     } else {
//         echo "operation faile";
//     }

// }



?>