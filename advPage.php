<?php
session_start();
$city = $_REQUEST["city"];

$db = new PDO("mysql:host=www.onisell.ir;dbname=fijmaclt_citys", "fijmaclt", "bd83Y7t3rF");
$queryGetView="SELECT * FROM `cities` WHERE `name` = '$city'";
$resultView=$db->query($queryGetView);
$resultArray=$resultView->fetch();
$newView=intval($resultArray["view"])+1;
$query="UPDATE cities
        SET view = $newView
        WHERE name = '$city';";
$db->exec($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADVERTISEMENT Page</title>
    <link rel="stylesheet" href="advPage.css">
</head>

<body>
    <div class="wholePage">
        <div class="menuBar">

            <div class="menuContainer">

                <a href="#" class="newAdvertisement menuA">آگهی جدید</a>
                <a href="#" class="support menuA">پشتیبانی</a>
                <a href="#" class="profile menuA">پروفایل</a>
            </div>
            <div class="searchAdv">
                <input type="text" name="search" id="search" placeholder="موضوع مورد نظر">
            </div>
            <?php
            echo "<div class=\"chosenCity\" value=\"$city\">$city</div>";
            ?>
            <div link="#" class="logo">
                <img src="/assets/images/logonomy-1679158691376.svg" alt="OniSellLogo">
            </div>

        </div>

        <div class="advBody">
            <div class="advSection">
            
            </div>
            <div class="optionsSection">
                <div class="priceOption divSelect optionElement">
                    (به تومان) قیمت حداقل<input class="priceInput" type="number" name="minPrice" id="minPrice">
                    (به تومان) قیمت حداکثر<input class="priceInput" type="number" name="maxPrice" id="maxPrice">
                </div>
                <div class="separator"></div>
                وضعیت محصول<div class="condition divSelect optionElement">
                    <select id="selectCondition" name="selectCondition" class="select">
                        <option value="0">وضعیت محصول</option>
                        <option value="نو">نو</option>
                        <option value="در حد نو">در حد نو</option>
                        <option value="کارکرده">کارکرده</option>
                        <option value="کهنه">کهنه</option>
                    </select>
                </div>
                <div class="separator"></div>
                دسته بندی<div class="group divSelect optionElement">
                    <select id="selectGroup" name="selectGroup" class="select" required>
                        <option value="0">یکی از شاخه ها را انتخاب کنید</option>
                        <option value="realestate">املاک</option>
                        <option value="vehicle">وسیله نقلیه</option>
                        <option value="digital">لوازم دیجیتال</option>
                        <option value="house">خانه و اشپزخانه</option>
                        <option value="service">سرویس و خدمات</option>
                        <option value="personal">وسایل شخصی</option>
                        <option value="entertainment">سرگرمی و فراغت</option>
                        <option value="social">اجتماعی</option>
                        <option value="equipment">تجهیزات صنعتی</option>
                    </select>
                </div>
                <div class="separator"></div>

                زیر شاخه<div class="subGroup divSelect optionElement">
                    <select id="selectSubGroup" name="selectSubGroup" class="select" required disabled>
                    </select>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="advPage.js"></script>

</html>