<?php
$id = $_REQUEST["id"];
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
            <div class="searchAdv">ddd</div>
            <?php
            echo "<div class=\"idDiv\" value=\"$id\">$id</div>";
            ?>
            <div link="#" class="logo">
                <img src="/assets/images/logonomy-1679158691376.svg" alt="OniSellLogo">
            </div>

        </div>
        <div class="pageBody">
            <div class="left">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <!--
                    <div class="mySlides fade">
                        <div class="divInnerImage"><img src="assets/peakpx.jpg" class="innerImage"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="divInnerImage"><img src="assets/wp8440836-anime-red-and-black-wallpapers.png" class="innerImage"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="divInnerImage"><img src="assets/wp9142818-red-and-black-4k-pc-wallpapers.jpg" class="innerImage"></div>
                    </div>
                    -->
                    <!-- Next and previous buttons -->
                    <!--
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    -->
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center" id="dotSection">
                <!--
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                -->
                </div>
                <a href="#" class="report">ثبت تخلف یا مشکل در آگهی</a>
            </div>


            <div class="right">
               
            </div>
        </div>
    </div>
</body>
<script src="adv.js"></script>

</html>