<?php 
session_start();

$title=$_POST["title"];
$text=$_POST["text"];
$selectGroup=$_POST["selectGroup"];
$selectSubGroup=$_POST["selectSubGroup"];
$searchCity=$_POST["searchCity"];
$selectCondition=$_POST["selectCondition"];
$imageCounter=intval($_POST["imageCounter"]);
for ($i=0; $i < $imageCounter ; $i++) { 
    //move images to db and save somewhare
}
$codemeli=$_POST["codemeli"];
$price=$_POST["price"];
$accId=$_SESSION["id"];
?>