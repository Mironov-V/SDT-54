<?php include "components/header.php" ?>
    <main class="wrapper">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="container"><br></div>
                    <h3>Панель администратора</h3>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Категория</label>
                                    <input type="text" class="form-control" value="Название категории">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Название товара</label>
                                    <input type="text" class="form-control" value="Название товара">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Изображение</label>
                                    <input type="file" class="form-control" value="Путь до файла">
                                </div>

                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "components/footer.php" ?>