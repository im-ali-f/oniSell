<?php
    session_start();
    $city=$_SESSION["city"];
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
                
                <a href="#"class="newAdvertisement menuA">آگهی جدید</a>
                <a href="#"class="support menuA">پشتیبانی</a>
                <a href="#"class="profile menuA">پروفایل</a>
            </div>
            <div class="searchAdv">ddd</div>
            <?php 
                echo "<div class=\"chosenCity\" value=\"$city\">$city</div>";
            ?>
            <div link="#" class="logo">
            <img src="/assets/images/logonomy-1679158691376.svg" alt="OniSellLogo">
            </div> 

        </div>
        
        <div class="advBody">
            <div class="advSection">
                <div class="adv">
                    <div class="advImage">
                        <img class="img" src="/oniSell/assets/test.jpg" alt="" srcset="">
                    </div>
                    <div class="advTexts">
                        <div class="title">تابلو تست عالی ب بله ودیگه </div>
                        <div class="description">
                            <div class="condition">نو</div>
                            <div class="price">91  تومان</div>
                            <div class="addDate">i d k</div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="optionsSection">
                <div class="priceOption divSelect optionElement">
                    (به تومان) قیمت حداقل<input class="priceInput" type="number" name="minPrice" id="minPrice">
                    (به تومان) قیمت حداکثر<input class="priceInput" type="number" name="maxPrice" id="maxPrice">
                </div>
                <div class="separator"></div>
                وضعیت محصول<div class="condition divSelect optionElement">
                    <select id="selectCondition" name="selectCondition" class="select">
                            <option value="">وضعیت محصول</option>
                            <option value="نو">نو</option>
                            <option value="در حد نو">در حد نو</option>
                            <option value="کارکرده">کارکرده</option>
                            <option value="کهنه">کهنه</option>
                    </select>
                </div>
                <div class="separator"></div>
                دسته بندی<div class="group divSelect optionElement">
                            <select id="selectGroup" name="selectGroup" class="select" required>
                                <option value="">یکی از شاخه ها را انتخاب کنید</option>
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