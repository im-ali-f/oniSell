<?php 
$type=$_REQUEST["type"];
$id=$_REQUEST["id"];
if($type=="adv"){
    $query="SELECT * FROM `adv` WHERE `id` = $id";

    try {
        $db = new PDO("mysql:host=www.onisell.ir;dbname=fijmaclt_onisellDataBase", "fijmaclt", "bd83Y7t3rF");
    } catch (PDOException $e) {
        echo "error darima !";
        die("ye error !" . $e->getmessage());
    }

    $result=$db->query($query);
    $result=$result->fetch();

    if(isset($result)){
        $resultToSendJSON=json_encode($result);
        echo $resultToSendJSON;
    }
    else{
        $resultToSendJSON="";
        echo $resultToSendJSON;

    }
}
elseif($type=="images"){
    $query="SELECT * FROM `images` WHERE `advId` = $id";

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

}
