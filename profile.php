<?php 
    include "components/header.php";

    // Отправка заявки
    $orders = new QueryOrders();
    $orders->app();

    // Проверка на то что пользователь авторизирован
    if (!$_SESSION['user'])
    {
        header('location: index.php');
    }
?>
    <main class="wrapper">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-10 col-12 mx-auto">
                        <div class="card">
                            <div class="card-header text-center">
                                <p>
                                    <b>
                                    <?php echo $_SESSION['user']['last_name'].'  '.$_SESSION['user']['first_name']; ?>
                                  </b>
                                </p>
                            </div>
                            <div class="card-body">
                                <h3>Оставить вопрос:</h3>
                                <form method="POST">

                                    <div class="mb-3">
                                        <label class="form-label">Тема</label>
                                        <select class="form-select" name="type" aria-label="Default select example">
                                          <option value="Покупка">Покупка</option>
                                          <option value="Доставка">Доставка</option>
                                          <option value="Материал">Материал</option>
                                        </select>
                                        <br>
                                        <textarea name="desk" class="form-control"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "components/footer.php" ?>