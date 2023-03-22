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
                <img src="/assets/images/gray_logo.svg" alt="OniSellLogo">
            </div>
            <div class="signupSection">
                <div class="errorSection signupPageMargin">

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        try {
                            $db = new PDO("mysql:host=www.onisell.ir;dbname=xxx", "xxx", "xxx");
                        } catch (PDOException $e) {
                            die("ye error !" . $e->getmessage());
                        }
                        $name = $_POST["userName"];
                        $email = $_POST["email"];
                        $pass = $_POST["password1"];

                        $queryName = "SELECT * FROM `acc` WHERE `name` LIKE \"$name\"";
                        $queryEmail = "SELECT * FROM `acc` WHERE `email` LIKE \"$email\"";

                        $resultName = $db->query($queryName);
                        $rowsName = $resultName->fetch();

                        $resultEmail = $db->query($queryEmail);
                        $rowsEmail = $resultEmail->fetch();


                        if (!$rowsName) {
                            if (!$rowsEmail) {
                                $queryCreateNewAcc = "
                            INSERT INTO acc (name, pass, email)
                            VALUES (\"$name\",\"$pass\",\"$email\");";
                                $db->exec($queryCreateNewAcc);
                                echo "<div class=\"error\"> ثبت نام کامل شد لطفا به حساب خود وارد شوید</div>";
                                echo "<a href=\"loginPage.php\"><button class=\"BTN redirectBTN\" id=\"redirectToLogin\">صفحه ورود</button></a>";
                                exit();
                            } else {
                                echo "<div class=\"error\"> کاربری با همین ایمیل قبلا ثبت نام کرده است</div>";
                            }
                        } else {
                            echo "<div class=\"error\"> کاربری با همین نام قبلا ثبت نام کرده است</div>";
                        }
                    }

                    ?>



                </div>
                <p class="signupText">اطلاعات را برای ورود وارد کنید</p>
                <form class="signupForm" action="signupPage.php" method="post" require>
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