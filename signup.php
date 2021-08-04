<?php 
    include "components/header.php";

    // Регистрация
    $app = new SignupForm();
    $app->appform();
?>

    <main class="wrapper">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="container"><br></div>
                    <div class="card">
                        <div class="container"><br></div>
                        <div class="col-8 mx-auto">
                            <h3 class="text-center">Зарегистрироваться</h3>
                            <p>или <a href="login.php">Войти</a></p>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Введите логин</label>
                                    <input type="text" class="form-control" name="username">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Введите имя</label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Введите фамилию</label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Пароль</label>
                                    <input type="password" class="form-control" name="password1">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Подтвердите пароль</label>
                                    <input type="password" class="form-control" name="password2">
                                </div>
                                <button type="submit" class="btn btn-success">Зарегистрироваться</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "components/footer.php"; ?>