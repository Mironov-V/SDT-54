<?php
require_once '../../controller/AdminAppController.php';
$app=New Admin();
$app->send_data();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST' enctype='multipart/form-data'> <!--php прочитать  файл -->
        <div>
            <label>Наименование товара </label>
            <input type="text" name="product_name" >
        </div>
        <div>
            <label>Цена </label>
            <input type="text" name="price" >
        </div>
        <div>
            <label>Изображение </label>
            <input type="file" name="img" >
        </div>
        <div>
            <label>Описание </label>
            <input type="text" name="text" >
        </div>
        <div>
            <label>Параметры </label>
            <input type="text" name="params" >
        </div>
        <div>
            <label>Категория </label>
            <select type="text" name="categori"  >
                <option value="1">Ветро-гидро защита</option>
            </select>
        </div>
        <button type='submit'>Отправить форму</button>



    </form>
     
</body>
</html>