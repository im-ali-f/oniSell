<?php
$id = $_REQUEST["id"];
$city=$_REQUEST["city"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adv</title>
    <link rel="stylesheet" href="adv.css">
</head>

<body>
    <div class="wholePage">
        <div class="menuBar">

            <div class="menuContainer">

                <a href="#" class="newAdvertisement menuA">آگهی جدید</a>
                <a href="#" class="support menuA">پشتیبانی</a>
                <a href="#" class="profile menuA">پروفایل</a>
            </div>
             <?php 
             echo  "<a href=\"http://onisell.ir/advPage.php?city=$city\" class=\"back\">بازگشت</a>";
            
            echo "<div class=\"idDiv\" value=\"$id\">$id</div>";
            ?>
            <div link="#" class="logo">
                <img src="/assets/images/logonomy-1679158691376.svg" alt="OniSellLogo">
            </div>

        </div>
        <div class="pageBody">
            <div class="left">
                               
                <a href="#" class="report">ثبت تخلف یا مشکل در آگهی</a>
            </div>


            <div class="right">
               
            </div>
        </div>
    </div>
</body>
<script src="adv.js"></script>

</html>