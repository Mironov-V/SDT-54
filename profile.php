<?php 
    include "components/header.php";

    // Отправка заявки
    $orders = new QueryOrders();
    $orders->app();

    // Проверка на то что пользователь авторизирован
    if (!$_SESSION['user'])
    {
        header('location: index');
    }
?>

<main>
        <div class="block mt-3">
            <div class="block__container">
                <h2 class="block__container-profile">
                    <strong>
                        <b>
                            <?php echo $_SESSION['user']['last_name'].'  '.$_SESSION['user']['first_name']; ?>
                        </b>
                    </strong>
                </h2>
            </div>
        </div>

        <div class="block mt-3">
            <div class="block__container w-100 w-50 form">
                <div class="block__container-text">
                    <h3>Оставить вопрос</h3>
                </div>
                <form method="POST" class="block__container-question form__control w-100">
                    <label>Тема:</label>
                    <select class="w-100" name="type">
                        <option value="Покупка">Покупка</option>
                        <option value="Доставка">Доставка</option>
                        <option value="Материал">Материал</option>
                    </select>
                    <div class="mt-3"></div>
                    <textarea name="desk" class="w-100"></textarea>
                    <div class="mt-3"></div>
                    <div class="block__deley-elem">
                        <button type="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include "components/footer.php" ?>