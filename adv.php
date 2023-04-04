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
            //echo "<div class=\"chosenCity\" value=\"$city\">$city</div>";
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
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <div class="divInnerImage"><img src="assets/gray_logo.svg"class="innerImage"></div>
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <div class="divInnerImage"><img src="assets/gray_logo.svg"class="innerImage"></div>
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <div class="divInnerImage"><img src="assets/gray_logo.svg"class="innerImage"></div>
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
            <div class="right">RRRRR</div>
        </div>
    </div>
</body>
<script src="adv.js"></script>
</html>