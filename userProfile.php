<?php 
    session_start();
    if(! isset($_SESSION["id"])){
        //header("Location: loginPage.php");
    }
    $id=$_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="userProfile.css">
</head>

<body>
    <div class="wholePage">

        <div class="menuBar">

            <div class="menuContainer">
                <a href="#" class="newAdvertisement menuA">آگهی جدید</a>
                <a href="#" class="support menuA">پشتیبانی</a>
            </div>
            <?php 
                echo "<div class=\"idDiv\" value=\"$id\">$id</div>"
            ?>
            
            <div link="#" class="logo">
                <img src="/assets/images/logonomy-1679158691376.svg" alt="OniSellLogo">
            </div>

        </div>


        <div class="pageBody">
            <div class="left">

            </div>


            <div class="right">
                <div class="userMenus">
                    <div class="userSubMenu " id="myAdvsMenu">آگهی های من</div>
                    <div class="userSubMenu activeMenu" id="myInfoMenu">اطلاعات من</div>
                    <a href="logout.php" class="userSubMenu" id="logout">خروج</a>
                </div>
            </div>


        </div>
    </div>
</body>
<script src="userProfile.js"></script>

</html>