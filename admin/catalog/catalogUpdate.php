<?php
require_once '../../controller/AdminAppController.php';
$app=New Admin();
// $app->send_data();
$params=$app->all_categories('products',$_GET['id']);
$app->update();
?>


<?php require_once '../header_admin.php'; ?>

<main>
        <div class="block">
            <div class="block__container">
                <div class="block__container-add">
                    <form method='POST' enctype='multipart/form-data'>

                        <div>
                            <label>Заголовок</label>
                            <input type="text" name="product_name" value="<?php echo $params[0]['product_name'] ?>">
                        </div>

                        <div>
                            <label>Описание</label>
                            <textarea type="text" name="text"><?php echo $params[0]['text'] ?></textarea>
                        </div>
                        <div>
                            <label>Цена</label>
                            <input type="text" name="price" value="<?php echo $params[0]['price'] ?>">
                        </div>
                        <div>
                            <label>Толщина</label>
                            <input type="text" name="params" value="<?php echo $params[0]['params'] ?>">
                        </div>
                        <div>
                            <label>Изображение</label>
                            <input type="file" name="img" value="<?php echo $params[0]['img'] ?>" >
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
                            <button type="submit">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
     
<?php require_once '../../components/footer.php'; ?>