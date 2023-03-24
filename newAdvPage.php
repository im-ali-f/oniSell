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
        <form class="advForm" action="createNewAdvertisement.php" method="post" enctype="multipart/form-data" >
            موضوع <input class="advInput formElement" type="text" name="title" id="title" placeholder="موضوع آگهی" required>
            توضیحات محصول<textarea class="advInput formElement" name="text" id="text" cols="30" rows="10" placeholder=" توضیحات محصول و آگهی" required></textarea>


            دسته بندی<div class="group formElement divSelect">
                <select id="selectGroup" class="select" required>
                    <option value="">یکی از شاخه ها را انتخاب کنید</option>
                    <option value="realestate">املاک</option>
                    <option value="vehicle">وسیله نقلیه</option>
                    <option value="digital">لوازم دیجیتال</option>
                    <option value="house">خانه و اشپزخانه</option>
                    <option value="service">سرویس و خدمات</option>
                    <option value="personal">وسایل شخصی</option>
                    <option value="entertainment">سرگرمی و فراغت</option>
                    <option value="social">اجتماعی</option>
                    <option value="equipment">تجهیزات صنعتی</option>
                </select>
            </div>
            زیر شاخه<div class="subGroup formElement divSelect">
                <select id="selectSubGroup" class="select" required disabled>
                    <option value=""></option>
                    
                </select>
            </div>
            شهر<div class="city formElement divSelect">
                <select id="selectCity" class="select" required>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                    <option value="Option 4">Option 4</option>
                    <option value="Option 5">Option 5</option>
                    <option value="Option length">Option that has too long of a value to fit</option>
                </select>
            </div>
            وضعیت<div class="condition formElement divSelect">
                <select id="selectCondition" class="select" required>
                    <option value="">وضعیت محصول</option>
                    <option value="Option 1">نو</option>
                    <option value="Option 2">در حد نو</option>
                    <option value="Option 3">کارکرده</option>
                    <option value="Option 4">کهنه</option>
                </select>
            </div>
            آپلود عکس<input class="imageUpload formElement" type="file" name="images[]" id="images" multiple>
            کدملی<input class="advInput formElement" type="text" name="codemeli" id="codemeli" placeholder="کد ملی" required>
            قیمت<input class="advInput formElement" type="number" name="price" id="price" placeholder="قیمت به تومان" required>
            <button class="submitBTN" type="submit">قرار دادن اگهی</button>
        </form>
    </div>
</body>
<script src="newAdvPage.js"></script>

</html>