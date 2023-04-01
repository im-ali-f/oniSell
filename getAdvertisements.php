<?php

use PhpMyAdmin\SqlParser\Components\Condition;
use Termwind\Components\Element;

$city=$_REQUEST["city"];
$minPrice=intval($_REQUEST["minPrice"]);
$maxPrice=intval($_REQUEST["maxPrice"]);
$condition=$_REQUEST["condition"];
$group=$_REQUEST["group"];
$subGroup=$_REQUEST["subGroup"];

$db = new PDO("mysql:host=www.onisell.ir;dbname=fijmaclt_onisellDataBase", "fijmaclt", "bd83Y7t3rF");
$wholeQuery="SELECT * FROM `adv` WHERE `city` = '$city' ";
if($condition !=0){
    $conditionQuery="AND `advCondition` = '$condition'";
    $wholeQuery.=$conditionQuery;
}
if($group !=0){
    $groupQuery="AND `advGroup` = '$group'";
    $wholeQuery.=$groupQuery;
}
if($subGroup !=0){
    $subGroupQuery="AND `advSubGroup` = '$subGroup' ";
    $wholeQuery.=$subGroupQuery;
}
if($minPrice!=0 && $maxPrice !=0){
    $minMaxPriceQuery="AND `price` BETWEEN $minPrice AND $maxPrice";
    $wholeQuery.=$minMaxPriceQuery;
}
elseif($minPrice!=0 && $maxPrice ==0){
    $minMaxPriceQuery="AND `price` >= $minPrice";
    $wholeQuery.=$minMaxPriceQuery;
}
elseif($minPrice==0 && $maxPrice !=0){
    $minMaxPriceQuery="AND `price` <= $maxPrice";
    $wholeQuery.=$minMaxPriceQuery;
}
$lastResult=[];
$result=$db->query($wholeQuery);
$result=$result->fetchAll();

if($result != "" || $result !=[]){
    foreach ($result as $row) {
        $id=$row["id"];
        $queryGetImg="SELECT * FROM `images` WHERE `advId` = $id";
        $resultImg=$db->query($queryGetImg);
        $resultImg=$resultImg->fetch();
        
        $lastResult["id"]=$row["id"];
        $lastResult["title"]=$row["title"];
        $lastResult["condition"]=$row["advCondition"];
        $lastResult["price"]=$row["price"];
        $lastResult["imgDir"]=$resultImg["imageDir"];
        $lastResultToSend[]=$lastResult;
    }
}

if(isset($lastResultToSend)){
    $resultToSendJSON=json_encode($lastResultToSend);
    echo $resultToSendJSON;
}
else{
    $resultToSendJSON="";
    echo $resultToSendJSON;

}

