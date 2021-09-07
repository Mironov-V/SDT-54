<?php
require_once '../../controller/AdminAppController.php';
$app=New Admin();
$app->send_data();
// $app->all_categories();

?>


<?php require_once '../header_admin.php'; ?>










    <main>
        <div class="block">
            <div class="block__container">
                <div class="block__container-add">
                <div class="mt-3"></div>
                    <form method="POST" enctype='multipart/form-data'>

                    <div>
                        <label>Наименование товара </label>
                        <input type="text" name="product_name" >
                    </div>
                    <div >
                        <label>Описание </label>
                        <input type="text" name="text" >
                    </div>
                    <div >
                        <label>Цена </label>
                        <input type="text" name="price" >
                    </div>

                    <div >
                        <label>Толщина</label>
                        <input type="text" name="param" placeholder="2.4">
                    </div>
                    <div >
                        <label>Изображение </label>
                        <input type="file" name="img" >
                    </div>
                   
                    <div > 
                        <label>Категория </label>
                        <select type="text" name="categori"  >
                            <!-- <option value="1">Ветро-гидро защита</option> -->
                            <?php foreach( $app->all_categories('categories') as $i):  ?>
                            
                            <option value="<?php print($i['id']) ; ?>"><?php print($i['categori_name']) ; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>


                    <div class="mt-3">
                        <button type='submit'>Отправить</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
     
<?php require_once '../../components/footer.php'; ?>