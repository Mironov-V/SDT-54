<?php require_once '../header_admin.php'; ?>

    <main>
        <div class="block">
            <div class="block__container">
                <div class="block__container-admin_catalog">
                    <div class="mt-3"></div>
                    <div class="block__container-add_catalog">
                        <a href="catalogAdd">
                            <button>Добавить</button>
                        </a>
                    </div>
                    <div class="mt-3"></div>
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Заголовок</th>
                                <!-- <th class="d-n">IMG</th> -->
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  foreach($app->all_categories('products') as $i): ?>
                            <tr>
                                <th><?php print_r($i['id']);?></th>
                                <td><?php print_r($i['product_name']);?></td>
                                <!-- <td class="d-n"><?php //print_r($i['image']);?></td> -->
                                <td>
                                    <div class="d-f">
                                        <a href="catalogUpdate?id=<?php print_r($i['id']);?>"><button id="update_btn">Обновить</button></a> <a href="catalogDelit?id=<?php print_r($i['id']);?>"><button id="delete_btn">Удалить</button></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

   
<?php require_once '../../components/footer.php'; ?>