<?php
try {
    $db = new PDO("mysql:host=www.onisell.ir;dbname=fijmaclt_citys", "fijmaclt", "bd83Y7t3rF");
} catch (PDOException $e) {
    echo "error darima !";
    die("ye error !" . $e->getmessage());
}
$str = $_REQUEST["str"];
$query = "SELECT * FROM `cities` WHERE `name` LIKE'%$str%'";
$result = $db->query($query);
$rows = $result->fetchall();
foreach ($rows as $row) {
    var_dump($row["name"]) ;
}