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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>SDT-54</title>
</head>

<body>


    <header class="header ">
        <div class="header__logo ">
            <img class="header__logo-img " src="assets/image/лого.jpg " alt="SDT-54 ">
        </div>

        <div class="header__menu-mobile ">
            <button id="menu" type="button">
                <img src="assets/image/menu-button_icon-icons.com_72989 (1).svg " alt=" ">
            </button>
        </div>

        <div class="header__menu ">
            <nav class="header__menu-navigate ">

                <ul class="navigate ">
                    <li class="navigate__item ">
                        <a class="navigate__item-link " href="index"><i class="fas fa-percentage "></i> Акции</a>
                    </li>
                    <li class="navigate__item ">
                        <a class="navigate__item-link " href="catalog"><i class="fas fa-th-list "></i> Каталог</a>
                    </li>
                    <li class="navigate__item ">
                        <a class="navigate__item-link " href="contact"><i class="fas fa-file-signature "></i> Контакты</a>
                    </li>
                    <?php if (isset($_SESSION)): ?>
                            <?php if ( $_SESSION): ?>
                                <li class="navigate__item ">
                                    <a class="navigate__item-link " href="profile"><i class="fas fa-door-open "></i> Профиль</a>
                                </li>
                                <li class="navigate__item ">
                                    <a class="navigate__item-link " href="logout"><i class="fas fa-door-open "></i> Выход</a>
                                </li>
                            <?php else: ?>   
                                <li class="navigate__item ">
                                    <a class="navigate__item-link " href="login"><i class="fas fa-door-open "></i> Вход</a>
                                </li>
                            <?php endif; ?>
                    <?php endif; ?>
                </ul>

            </nav>
        </div>
    </header>

    <!-- Мобильное меню -->
    <section id="navigate" class="navigate">
        <ul class="navigate__mobile">
            <li class="navigate__mobile-item">
                <a class="navigate__mobile-link" href="index"><i class="fas fa-percentage "></i> Акции</a>
            </li>
            <li class="navigate__mobile-item">
                <a class="navigate__mobile-link" href="catalog"><i class="fas fa-th-list "></i> Каталог</a>
            </li>
            <li class="navigate__mobile-item">
                <a class="navigate__mobile-link" href="contact"><i class="fas fa-file-signature "></i> Контакты</a>
            </li>
            <?php if (isset($_SESSION)): ?>
                <?php if ( $_SESSION): ?>
                    <li class="navigate__mobile-item">
                        <a class="navigate__mobile-link" href="profile"><i class="fas fa-door-open "></i> Профиль</a>
                    </li>
                    <li class="navigate__mobile-item">
                        <a class="navigate__mobile-link" href="logout"><i class="fas fa-door-open "></i> Выход</a>
                    </li>
                <?php else: ?> 
                    <li class="navigate__mobile-item">
                        <a class="navigate__mobile-link" href="login"><i class="fas fa-door-open "></i> Вход</a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            
        </ul>
    </section>
    <!-- END -->
