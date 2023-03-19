<?php
try {
    $db = new PDO("mysql:host=www.onisell.ir;dbname=xxxxx", "xxxxx", "xxxxx");
} catch (PDOException $e) {
    echo "error darima !";
    die("ye error !" . $e->getmessage());
}
$str = $_REQUEST["str"];
$query = "SELECT * FROM `cities` WHERE `name` LIKE'%$str%'";
$result = $db->query($query);
$rows = $result->fetchall();
var_dump($rows);
