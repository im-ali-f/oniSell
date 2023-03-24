<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new advertisement</title>
    <link rel="stylesheet" href="newAdvPage.css">
</head>

<body>
    <div class="menu"></div>
    <div class="wholePage">
        <form class="advForm" action="createNewAdvertisement.php" method="post" enctype="multipart/form-data">
            موضوع <input class="advInput formElement" type="text" name="title" id="title" >
            توضیحات محصول<input class="advInput formElement" type="text" name="text" id="text">

            دسته بندی<div class="group formElement">
                <select id="selectGroup">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                    <option value="Option 4">Option 4</option>
                    <option value="Option 5">Option 5</option>
                    <option value="Option length">Option that has too long of a value to fit</option>
                </select>
            </div>
            زیر شاخه<div class="subGroup formElement">
                <select id="selectSubGroup">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                    <option value="Option 4">Option 4</option>
                    <option value="Option 5">Option 5</option>
                    <option value="Option length">Option that has too long of a value to fit</option>
                </select>
            </div>
            شهر<div class="city formElement">
                <select id="selectCity">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                    <option value="Option 4">Option 4</option>
                    <option value="Option 5">Option 5</option>
                    <option value="Option length">Option that has too long of a value to fit</option>
                </select>

                وضعیت<div class="condition formElement">
                <select id="selectCondition">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                    <option value="Option 4">Option 4</option>
                    <option value="Option 5">Option 5</option>
                    <option value="Option length">Option that has too long of a value to fit</option>
                </select>
            </div>
            آپلود عکس<input class="formElement" type="file" name="images[]" id="images" multiple>
            کدملی<input class="advInput formElement" type="text" name="codemeli" id="codemeli">
            قیمت<input  class="advInput formElement" type="number" name="price" id="price">
            <button class="formElement" type="submit">قرار دادن اگهی</button>
        </form>
    </div>
</body>
<script src="select2.js"></script>

</html>