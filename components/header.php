<?php 
    session_start();
    include 'controller/AppController.php';
    
    // var_dump($_SESSION);
?>
<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>STD-54</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">SDT-54</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Акции</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="catalog.php">Каталог</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="admin.php">Админ</a>
                        </li> -->
                        <?php if (isset($_SESSION)): ?>
                            <?php if ( $_SESSION): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.php">Личный кабинет</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Выход</a>
                                </li>

                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Войти</a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="login.php">Войти</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>