<?php 
session_start();

$title=$_POST["title"];
$text=$_POST["text"];
$selectGroup=$_POST["selectGroup"];
$selectSubGroup=$_POST["selectSubGroup"];
$searchCity=$_POST["searchCity"];
$selectCondition=$_POST["selectCondition"];
$imageCounter=intval($_POST["imageCounter"]);
$email=$_SESSION["email"];
$uploadDirs=[];
for ($i=1; $i <= $imageCounter ; $i++) {    
    $inputName="image_$i";
    $uploaddir = 'upload/';
    $uploadfile = $uploaddir ."$email"."_".basename($_FILES[$inputName]['name']);
    if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $uploadfile)) {
        echo "File successfully uploaded.";
    } else {
        echo "Error!";
    }
    $uploadDirs[]=$uploadfile;
}
var_dump($uploadDirs);
$codemeli=$_POST["codemeli"];
$price=$_POST["price"];
$accId=$_SESSION["id"];
?>