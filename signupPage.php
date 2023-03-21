<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="signupPage.css">
</head>

<body>
    <div class="wholePage">
        <div class="container">
            <div class="logo">
                <img src="/assets/images/logonomy-1679158691376.svg" alt="OniSellLogo">
            </div>
            <div class="signupSection">
                <p class="signupText">اطلاعات را برای ورود وارد کنید</p>
                <form class="signupForm" action="signup.php" method="post" require>
                    Username<input type="text" class="textInput signupPageMargin" name="userName" id="userName">
                    Email<input type="email" class="textInput signupPageMargin" name="email" id="email">
                    Password <input type="password" class="textInput signupPageMargin" name="password1" id="password1">
                    reenter Password <input type="password" class="textInput signupPageMargin" name="password2" id="password2">
                    <button class="BTN" type="submit"> ثبت نام</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>