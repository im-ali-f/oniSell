<?php

use PhpMyAdmin\SqlParser\Components\Condition;

$city=$_REQUEST["city"];
$minPrice=intval($_REQUEST["minPrice"]);
$maxPrice=intval($_REQUEST["maxPrice"]);
$condition=$_REQUEST["condition"];
$group=$_REQUEST["group"];
$subGroup=$_REQUEST["subGroup"];

$db = new PDO("mysql:host=www.onisell.ir;dbname=fijmaclt_onisellDataBase", "fijmaclt", "bd83Y7t3rF");
$wholeQuery="SELECT * FROM `adv` WHERE `city` = 'تهران' ";
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
$result=$db->query($wholeQuery);
var_dump($result);
?>