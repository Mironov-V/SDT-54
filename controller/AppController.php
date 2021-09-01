<?php

// Включение вывода ошибок
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', '1');


$host = 'localhost';
$user = 'root';
$password = 'amritta31137117';
$db_name = 'STD_54';




class SignupForm
{
  function appform(){
    if ($_POST){
      $connect = new PDO(
        'mysql:host=localhost;dbname=STD_54',
         'root', 
         '071452rdf'
      );

      if (strlen($_POST['first_name']) > 0 && strlen($_POST['first_name']) <=25)// && !$_POST['last_name'] && !$_POST['username'] && !$_POST['password'] && !$_POST['password1'])
      {
        if (strlen($_POST['last_name']) > 0 && strlen($_POST['last_name']) <=25)
        {
          if (strlen($_POST['username']) > 0 && strlen($_POST['username']) <=254)
          {
            if (strlen($_POST['password1']) > 0 && strlen($_POST['password1']) <=254 && strlen($_POST['password2']) > 0 && strlen($_POST['password2']) <=254)
            {
              if ($_POST['password1'] == $_POST['password2']){
                $sth = $connect->prepare("INSERT INTO profiles(first_name, last_name, username, email, password) VALUES(:first_name, :last_name, :username, :email, :password);");
                $sth->execute(
                  [
                    'first_name'=>$_POST['first_name'], 
                    'last_name'=>$_POST['last_name'], 
                    'username'=>$_POST['username'], 
                    'email'=>$_POST['email'], 
                    'password'=>$_POST['password1']
                  ]
                );

                return header('location: login.php');
              } else {
                echo '<div class="alert alert-danger" role="alert">
                      Пароли не соответствуют друг другу!
                    </div>';
              }
            } else {
              echo '<div class="alert alert-danger" role="alert">
                    Введите правильный пароль
                  </div>';
            }
          } else {
            echo '<div class="alert alert-danger" role="alert">
                  Вы ввели не правильный логин или вы ввели слишком длинный логин
                </div>';
          }
        } else {
          echo '<div class="alert alert-danger" role="alert">
                Введите фамилию или вы ввели слишком длинное значение
              </div>';
        }
      } else {
        echo '<div class="alert alert-danger" role="alert">
                Введите имя или вы ввели слишком длинное значение
              </div>';
      }
    }
  }
}


class LoginForm
{
  function appform()
  {
    
    $connect = new PDO(
      'mysql:host=localhost;dbname=STD_54',
       'root', 
       '071452rdf'
    );
    if ($_POST){
      $email = $_POST['email'];
      $password = $_POST['password'];

      // Производим забор значений из базы данных таблицы profiles
      // С условием сравнения электронной почты 
      $data = $connect->prepare(
        "SELECT * FROM profiles WHERE email=?;"
      );
      $data->execute([$email]);


        // Хрним массив данных из базы
        $data = $data->fetchAll();
        // Данные почты хранятся в $data['email'];
        // Данные пароля хранятся в $data['password'];
        if (count($data) != 0){

          var_dump($data);
          $data = $data[0];
          if ($data['email'] == $email && $data['password'] == $password){  
            // Создание точки входа пользователя
            $_SESSION['user'] = $data;
            return header('location: profile.php');
            
          } else {
            echo '* не правильный логин или пароль.';
          }
        } else {
          print('<div class="alert alert-danger" role="alert">
                  * Такого пользователя нет!
                </div>');
        }


    }
  }
}

class QueryOrders
{
  function app()
  {
    if ($_POST){
      $user_id = +$_SESSION['user']['id'];
      $title = $_POST['type'];
      $desk = $_POST['desk'];
      
      // Запись заявки в базу данных
      $connect = new PDO(
        'mysql:host=localhost;dbname=STD_54',
         'root', 
         '071452rdf'
      );
      if (strlen($_POST['desk']) > 0){
        $query = $connect->prepare("INSERT INTO orders(user_id, title, desk) VALUES(:user_id, :title, :desk)");
        $query->execute(
          [
            'user_id'=>$user_id, 
            'title'=>$title, 
            'desk'=>$desk, 
          ]
        );
      } else {
        print('<div class="alert alert-danger" role="alert">
                  * Введите описание!
              </div>');
      }
    }
  }
}























