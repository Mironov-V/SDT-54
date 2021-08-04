<?php
    include "components/header.php";

    // Вход
    $app = new LoginForm();
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
                            <h3 class="text-center">Войти</h3>
                            <p>или <a href="signup.php">Зарегистрироваться</a></p>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Пароль</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <button type="submit" class="btn btn-success">Войти</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
<?php include "components/footer.php"; ?>