<?php
$id = $_GET["id"];

$myObj->title = "John $id ";
$myObj->age = 30;
$myObj->html = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;

 ?>
