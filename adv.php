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
                        <div class="divInnerImage"><img src="assets/peakpx.jpg" class="innerImage"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="divInnerImage"><img src="assets/wp8440836-anime-red-and-black-wallpapers.png" class="innerImage"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="divInnerImage"><img src="assets/wp9142818-red-and-black-4k-pc-wallpapers.jpg" class="innerImage"></div>
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


            <div class="right">
                <p class="infoP"></p>
                <div class="adv">
                    <div class="title divAdv">یه چیز خوب نتیامصبامنصبامنبمن تصلتمص بامنصبانب و خفن</div>
                    <div class="separator"></div>

                    <div class="groupSection ">
                        <p class="infoP">گروه:</p>
                        <div class="group divAdv">خونگی</div>
                        <p class="infoP">زیرگروه:</p>
                        <div class="subGroup divAdv">مبلمان</div>
                    </div>
                    <div class="separator"></div>

                    <p class="infoP">توضیحات محصول:</p>
                    <div class="textAdv divAdv">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus ea rem dolores corrupti quod cupiditate magnam cum sapiente provident veniam error animi vero, obcaecati dolorem reiciendis praesentium quisquam nihil suscipit pariatur voluptas libero ratione. Voluptatum beatae inventore optio nostrum placeat in et nobis eaque. Totam, eveniet nostrum. Delectus repellat temporibus corrupti veritatis eligendi similique laudantium exercitationem nostrum, mollitia nobis incidunt suscipit aperiam doloremque eum vitae, porro quos velit? Beatae nobis ab modi debitis dicta animi reprehenderit nostrum voluptatum quaerat odio enim, odit, nisi nam! Quae esse deserunt eaque commodi error minus maxime ex harum molestiae consequuntur architecto, officia expedita?
                    </div>
                    <div class="personalInfo">
                        <div class="separator"></div>

                        <p class="infoP">ایمیل آگهی کننده:</p>
                        <div class="email divAdv">aliFarhad.asus@gmail.com</div>
                    </div>
                    <div class="separator"></div>

                    <p class="infoP">قیمت:</p>
                    <div class="price divAdv">100000تومان</div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="adv.js"></script>

</html>