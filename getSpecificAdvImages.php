<?php 

$id=$_REQUEST["id"];
$query="SELECT * FROM `images` WHERE `id` = $id";

try {
    $db = new PDO("mysql:host=www.onisell.ir;dbname=fijmaclt_onisellDataBase", "fijmaclt", "bd83Y7t3rF");
} catch (PDOException $e) {
    echo "error darima !";
    die("ye error !" . $e->getmessage());
}

$result=$db->query($query);
$result=$result->fetchAll();

if(isset($result)){
    $resultToSendJSON=json_encode($result);
    echo $resultToSendJSON;
}
else{
    $resultToSendJSON="";
    echo $resultToSendJSON;

}
?>