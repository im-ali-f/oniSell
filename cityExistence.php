<?php
try {
    $db = new PDO("mysql:host=www.onisell.ir;dbname=fijmaclt_citys", "fijmaclt", "bd83Y7t3rF");
} catch (PDOException $e) {
    echo "error darima !";
    die("ye error !" . $e->getmessage());
}
$city = $_REQUEST["city"];
$query="SELECT * FROM `cities` WHERE `name` = '$city'";
$result=$db->query($query);
echo($result);