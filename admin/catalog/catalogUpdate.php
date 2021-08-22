<?php
require_once '../../controller/AdminAppController.php';
$app=New Admin();
// $app->send_data();
$params=$app->all_categories('products',$_GET['id']);
$app->update();
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
            <input type="text" name="product_name" value="<?php echo $params[0]['product_name'] ?>" >

                      
        </div>
        <div>
            <label>Цена </label>
            <input type="text" name="price" value="<?php echo $params[0]['price'] ?>" >
        </div>
        <div>
            <label>Изображение </label>
            <input type="file" name="img" value="<?php echo $params[0]['img'] ?>" >
        </div>
        <div>
            <label>Описание </label>
            <input type="text" name="text" value="<?php echo $params[0]['text'] ?>" >
        </div>
        <div>
            <label>Параметры </label>
            <input type="text" name="params" value="<?php echo $params[0]['params'] ?>">
        </div>
        <div>
            <label>Категория </label>
            <select type="text" name="categori">
                <option value="<?php print($app->all_categories('categories')[0]['id']) ; ?>"><?php print($app->all_categories('categories')[$params[0]['categori'] - 1]['categori_name']) ; ?></option>

                <!-- Дублирование категории - убрать  -->
                <?php foreach( $app->all_categories('categories') as $i):  ?>
                    
                   <?php if ($i['id'] !== $params[0]['categori']): ?>
                        <option value="<?php print($i['id']) ; ?>"><?php print($i['categori_name']) ; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>

            </select>
        </div>

        <div>
        <input type="submit" class="btn btn-danger" value="Отправить">
        </div>
        



    </form>
     
</body>
</html>