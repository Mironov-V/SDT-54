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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Наименование </th>
      <th>Дейсвие</th>
     
    </tr>
  </thead>
  <tbody>
    <?php  foreach($app->all_categories('products') as $i): ?>
    <tr>
      <th scope="row"><?php print_r($i['id']);?></th>
      <td><?php print_r($i['product_name']);?></td>
      <td><a href="catalogUpdate?id=<?php print_r($i['id']);?>"><button class="btn">Обновить</button></a> | <a href="catalogDelit?id=<?php print_r($i['id']);?>"><button class="btn">Удалить</button></a></td>
     </tr>
    <?php  endforeach; ?>

  </tbody>
</table>

</body>
</html>