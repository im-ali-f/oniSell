<?php
session_start();

echo $_SESSION['email'] . "===>" . $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oni Sell</title>
    <link rel="stylesheet" href="homePage.css">
    <script src="https://kit.fontawesome.com/917d68c74c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wholePage">
        <div class="logo">
            <img src="/assets/images/logonomy-1679158691376.svg" alt="OniSellLogo">
        </div>
        <div class="menus homePageMargin">
            <a href="/loginPage.php" class="addAdv">آگهی جدید</a>
            <a href="#" class="aboutUs">درباره ما</a>
            <a href="#" class="support">پشتیبانی</a>

        </div>
        <div class="separator"></div>

        <div class="homeText homePageMargin">
            <p class="homeTextTxt">آنی سل ﭘﺎﯾﮕﺎه ﺧﺮﯾﺪ و ﻓﺮوش ﺑﯽ‌واﺳﻄﻪ‌
                <br> اﮔﻪ دﻧﺒﺎل ﭼﯿﺰی ﻫﺴﺘﯽ، ﺷﻬﺮت رو اﻧﺘﺨﺎب ﮐﻦ و ﺗﻮ دﺳﺘﻪ‌ﺑﻨﺪی‌ﻫﺎ ﺑﻪ دﻧﺒﺎﻟﺶ ﺑﮕﺮد. اﮔﺮ ﻫﻢ ﻣﯽ‌ﺧﻮای ﭼﯿﺰی ﺑﻔﺮوﺷﯽ، ﭼﻨﺪ ﺗﺎ ﻋﮑﺲ ﺧﻮب ازش ﺑﮕﯿﺮ و آگهی بزار
                <div class="error invisible">اسم شهر را به درستی وارد کنید</div>
        </div>
        <div class="searchSection homePageMargin">
            <input type="search" name="searchCity" id="searchCity" placeholder="جست و جوی شهر">

            <div id="suggested"></div>
        </div>
        <button class="BTN" id="searchBTN">جست و جو شهر</button>
        <!--
        <div class="mostViewedCitysSection homePageMargin">
            <p class="mostViewedCitysTxt">شهر های پر بازدید</p>
            <div class="mostViewedcitys"></div>
        </div>
        -->
        <div class="separator homePageMargin"></div>
            
        <div class="socialMedias homePageMargin">
            <a class="iconA" href="https://www.instagram.com/im_ali_f/">
                <i class="fa-brands fa-instagram icon"></i>
            </a>

            <a class="iconA" href="https://github.com/im-ali-f">
                <i class="fa-brands fa-github icon"></i>
            </a>
        </div>
    </div>
    <script type="module" src="homePage.js"></script>
</body>

</html>