<?php
require_once "controller/AppController.php";
$app=new Catalog();
$app->ViewAll();
var_dump($app);
?>
<?php include "components/header.php" ?>
<main>
        <h2 class="">Каталог</h2>
        <div class="block d-b">
            <div class="mt-3"></div>
            <div class="mt-3"></div>

            <div class="block__mobileFilter">
                <div class="block__mobileFilter-list">
                    <a href="#">Ветро-гидро защита</a>
                    <a href="#">Водосточная продукция</a>
                    <a href="#">Водосточная продукция ПРЕМИУМ</a>
                    <a href="#">Доборные элементы</a>
                    <a href="#">Метеллочерепица</a>
                    <a href="#">Профнастил</a>
                </div>
            </div>

            <div class="block__catalog">
                <div class="mt-3 block__catalog-lists">
                    <!-- START FOR -->
                    <a href="show">
                        <div class="block__catalog-item card">
                            <div class="card__container">
                                <!-- Изображение товара -->
                                <div class="card__container-image">
                                    <img src="https://github.com/Mironov-V/SDT-54/blob/main/media/400.jpg?raw=true" alt="Заголовок">
                                </div>
                                <div class="card__container-title">Заголовок</div>
                                <div class="card__container-deskription">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi laboriosam reprehenderit iusto! Suscipit totam dicta modi atque. Nesciunt, architecto. Nihil facilis iste commodi eius maxime delectus. Fugit ad saepe iste!
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END FOR -->
                </div>
                    

                <div class="block__filter">
                    <ul class="block__filter-list">
                        <h2>
                            <b>
                                Категории:
                            </b>
                        </h2>
                        <br>
                        <li>
                            <a href="#">Ветро-гидро защита</a>
                        </li>
                        <br>
                        <li>
                            <a href="#">Водосточная продукция</a>
                        </li>
                        <br>
                        <li>
                            <a href="#">Водосточная продукция ПРЕМИУМ</a>
                        </li>
                        <br>
                        <li>
                            <a href="#">Доборные элементы</a>
                        </li>
                        <br>
                        <li>
                            <a href="#">Метеллочерепица</a>
                        </li>
                        <br>
                        <li>
                            <a href="#">Профнастил</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    

    <?php include "components/footer.php" ?>