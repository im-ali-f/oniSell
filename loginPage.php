<?php
                    session_start();

?>
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
                <div class="errorSection loginPageMargin">
                    <?php


                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        try {
                            $db = new PDO("mysql:host=www.onisell.ir;dbname=fijmaclt_accounts", "fijmaclt", "bd83Y7t3rF");
                        } catch (PDOException $e) {
                            die("ye error !" . $e->getmessage());
                        }
                        $email = $_POST["email"];
                        $pass = $_POST["password"];
                        $queryFindUser = "SELECT * FROM `acc` WHERE `email` LIKE '$email' AND `pass` LIKE '$pass'";
                        $resultFindUser = $db->query($queryFindUser);
                        $rowUser = $resultFindUser->fetch();
                        if(is_array($rowUser)){
                            if ($rowUser["email"] == $email && $rowUser["pass"] == $pass) {
                                echo "now you are logged in $email , $pass !";
                            $_SESSION['id'] = $rowUser['id'];
                            $_SESSION['name'] = $rowUser['name'];
                            $_SESSION['email'] = $rowUser['email'];
                            } else {
                                echo "<div class=\"error\"> نام کاربری یا رمز عبور اشتباه است</div>";
                            }
                        }
                        else{
                            echo "<div class=\"error\"> نام کاربری یا رمز عبور اشتباه است</div>";
                        }
                        
                    }


                    ?>
                </div>
                <p class="loginText">اطلاعات را برای ورود وارد کنید</p>
                <form class="loginForm" action="loginPage.php" method="post">
                    Email<input type="email" class="textInput loginPageMargin" name="email" id="email" required>
                    Password <input type="password" class="textInput loginPageMargin" name="password" id="password" required>
                    <button class="BTN" type="submit">وارد شوید</button>
                </form>
                <a href="signupPage.php"><button class="BTN" id="signInFromLoginPage">ثبت نام</button></a>
            </div>
        </div>
    </div>
</body>

</html>