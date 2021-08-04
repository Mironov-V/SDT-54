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
                            <div class="container">
                                <div class="row">
                                    <div class="col-8"></div>
                                    <div class="col-4">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Добавить</button>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Добавить товар</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST">
                                                    <div class="mb-3">
                                                        <label class="form-label">Категория</label>
                                                        <input type="text" class="form-control" value="Название категории">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Название</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Изображение</label>
                                                        <input type="file" class="form-control" value="">
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt"></div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Изображение</th>
                                        <th scope="col">Название</th>
                                        <th scope="col">Действие</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <div class="col-2">
                                                <img class="img-fluid" src="http://a0565961.xsph.ru/wp-content/uploads/2021/04/izospan-a2-324x164.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Тут название</td>
                                        <td><a href="delete.html" class="btn btn-danger">Удалить</a></td>
                                        <td><a href="update.html" class="btn btn-primary">Редактировать</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <div class="col-2">
                                                <img class="img-fluid" src="http://a0565961.xsph.ru/wp-content/uploads/2021/04/izospan-a2-324x164.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Тут название</td>
                                        <td><a href="delete.html" class="btn btn-danger">Удалить</a></td>
                                        <td><a href="update.html" class="btn btn-primary">Редактировать</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <div class="col-2">
                                                <img class="img-fluid" src="http://a0565961.xsph.ru/wp-content/uploads/2021/04/izospan-a2-324x164.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>Тут название</td>
                                        <td><a href="delete.html" class="btn btn-danger">Удалить</a></td>
                                        <td><a href="update.html" class="btn btn-primary">Редактировать</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "components/footer.php" ?>