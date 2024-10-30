<?php
include ("./config.php");
$getPancils = $conn->prepare("SELECT * FROM pancil");
$getPancils->execute();
$pancilData = $getPancils->fetchAll();

echo "<select>";
echo "<option>Select Name</option>";
foreach ($pancilData as $pancils) {
    echo "<option velue=".$pancils['id'].">".$pancils['name']."</option>";

};
echo "</select>";





?>