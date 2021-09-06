<?php
    include "components/header.php";

    if (isset($_POST['btn_login'])){
        // Вход
        $app = new LoginForm();
        $app->appform();
    }

    if (isset($_POST['btn_signup'])){
        // Регистрация
        $app = new SignupForm();
        $app->appform();
    }
    
?>
    <main>
        <div class="block">
            <div class="block__deley mt-3">
                <div class="block__deley-elem">
                    <button id="registration">Регистрация</button> <button id="login">Вход</button>
                </div>
            </div>
        </div>

        <section id="registration_form" class="form">
            <form method="POST" class="form__control">
                <h2 class="mt-3">Регистрация</h2>
                <div>
                    <label>Логин</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label>Введите имя</label>
                    <input type="text" name="first_name">
                </div>
                <div>
                    <label>Введите фамилию</label>
                    <input type="text" name="last_name">
                </div>
                <div>
                    <label>Почта</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label>Пароль</label>
                    <input type="password" name="password1">
                </div>
                <div>
                    <label>Пароль ещё раз</label>
                    <input type="password" name="password2">
                </div>
                <div class="block__deley-elem">
                    <button name="btn_signup" type="submit">Отправить</button>
                </div>

            </form>
        </section>

        <section id="login_form" class="form">
            <form method="POST" class="form__control">
                <h2 class="mt-3">Вход</h2>
                <div>
                    <label>Почта</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label>Пароль</label>
                    <input type="password" name="password">
                </div>
                <div class="block__deley-elem">
                    <button name="btn_login" type="submit">Войти</button>
                </div>

            </form>
        </section>
    </main>
    <script src="assets\js\function.js"></script>
<?php include "components/footer.php"; ?>