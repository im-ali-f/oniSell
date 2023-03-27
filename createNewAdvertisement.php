<?php
session_start();

$title = $_POST["title"];
$text = $_POST["text"];
$selectGroup = $_POST["selectGroup"];
$selectSubGroup = $_POST["selectSubGroup"];
$searchCity = $_POST["searchCity"];
$selectCondition = $_POST["selectCondition"];
$imageCounter = intval($_POST["imageCounter"]);
$email = $_SESSION["email"];
$uploadDirs = [];
for ($i = 1; $i <= $imageCounter; $i++) {
    $inputName = "image_$i";
    $uploaddir = 'upload/';
    $uploadfile = $uploaddir . "$email" . "_" . basename($_FILES[$inputName]['name']);
    if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $uploadfile)) {
    } else {
        echo "Error!";
    }
    $uploadDirs[] = $uploadfile;
}
$codemeli = $_POST["codemeli"];
$price = $_POST["price"];
$accId = $_SESSION["id"];


$db = new PDO("mysql:host=www.onisell.ir;dbname=fijmaclt_onisellDataBase", "fijmaclt", "bd83Y7t3rF");
$queryForAdv = "
        INSERT INTO adv (title,text,advGroup,advSubGroup,city,advCondition,imageCounter,meliCode,price,accId)
        VALUES (\"$title\",\"$text\",\"$selectGroup\",\"$selectSubGroup\",\"$searchCity\",\"$selectCondition\",\"$imageCounter\",\"$codemeli\",\"$price\",\"$accId\");";
$db->exec($queryForAdv);

$advId = $db->lastInsertId();

foreach ($uploadDirs as $dir) {
    $queryForImages = "
                    INSERT INTO images (advId,imageDir)
                    VALUES (\"$advId\",\"$$dir\");";
    $db->exec($queryForImages);            
}

header("Location: http://onisell.ir/");
exit();
