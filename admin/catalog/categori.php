<?php
require_once '../../controller/AdminAppController.php';
$app=new Admin();
$app->new_categori();
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
<form method='POST'>
        <div>
            <label  >Категории товара</label>
            <input type="text" name='categori_name'>
        </div>
       
        <button type='submit'>
            отправить
        </button>

    </form>  
  
</body>
</html>