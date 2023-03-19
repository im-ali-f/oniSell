<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="loginPage.css">
</head>

<body>
    <div class="wholePage">
        <div class="container">
            <div class="logo">
                <img src="/assets/images/logonomy-1679158691376.svg" alt="OniSellLogo">
            </div>
            <div class="loginSection">
                <p class="loginText">اطلاعات را برای ورود وارد کنید</p>
                <form class="loginForm" action="login.php" method="post">
                     Email<input type="email" class="textInput loginPageMargin" name="email" id="email">
                     Password <input type="password" class="textInput loginPageMargin" name="password" id="password">
                    <button class="BTN" type="submit">وارد شوید</button>
                </form>
                <a href="signup.php"><button class="BTN" id="signInFromLoginPage">ثبت نام</button></a>
            </div>
        </div>
    </div>
</body>

</html>