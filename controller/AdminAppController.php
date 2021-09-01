<?php
// Включение вывода ошибок
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', '1');

class Admin{

    function file_save(){
        if($_FILES)
        {
            $path='../../media/'.$_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'],$path);
            return $path;
        }
    }

    function send_data(){
        if($_POST)
        {
            print_r($_POST); 
           // echo '<br>'  ;  
            $params=0.0;       
            //var_dump($_POST);

            $product_name=$_POST['product_name'];
            $price=(float)$_POST['price'];
            $text=$_POST['text'];
            $categori=(integer)$_POST['categori'];

            $path = $this->file_save();//сохрание пути к файлу изображения

            if($_POST['params'])
            {
                $params=(float)$_POST['params'];
            }
            $connect = new PDO(
                'mysql:host=localhost;dbname=std_54',
                 'root', 
                 '071452rdf'
              );
           
           
            $response=$connect->prepare("INSERT INTO products(product_name, price, img, text, categori, params) VALUES(:product_name, :price, :img, :text, :categori, :params);");
            $response->execute(
                [
                    'product_name'=>$product_name,
                    'price'=>$price,
                    'img'=>$path,
                    'text'=>$text,
                    'categori'=>$categori,
                    'params'=>$params
                ]
            );

        }
    }
    
      
    function all_categories($p,$param=null){
        $connect = new PDO(
            'mysql:host=localhost;dbname=std_54',
             'root', 
             '071452rdf'
          );
        //   print_r($connect->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC));
        if($param==null){
             return $connect->query("SELECT * FROM {$p}")->fetchAll(PDO::FETCH_ASSOC);//вызываем тригер который возвращает все значения без передачи параметров
    
        }
        else {
            $data=$connect->prepare("SELECT * FROM {$p} WHERE id=?");
            $data->execute([$param]);
            return $data->fetchAll();
        }
       
        

    }

    


    function update(){  //обновление и сравнение данных
        if($_GET){
           if($_POST){
               $product_name=$_POST['product_name'];
               $price=$_POST['price'];
               $img=$_FILES['img'];
               print_r($img);
               $text=$_POST['text'];
               $params=(float)$_POST['params'];
               $categori = (integer)$_POST['categori'];

               $data=$this->all_categories('products',$_GET['id']);

            $connect = new PDO(
            'mysql:host=localhost;dbname=std_54',
                'root', 
                '071452rdf'
            );
            $data=$connect->prepare("SELECT * FROM products WHERE id=?");
            $data->execute([$_GET['id']]);
            // Переопределение старой переменной
            $data = $data->fetchAll();

            if ($product_name === $data[0]['product_name']){
                // Пропускаем
            } else{
                $query = $connect->prepare("UPDATE products SET product_name=:product_name WHERE id=:id");
                $query->execute(
                    [
                        "id" => $_GET['id'],
                        "product_name" => $product_name
                    ]
                );
            }
            if ($price === $data[0]['price']){
                // ...
            } else{
                $query = $connect->prepare("UPDATE products SET price=:price WHERE id=:id");
                $query->execute(
                    [
                        "id" => $_GET['id'],
                        "price" => $price
                    ]
                );
            }
            if ($text === $data[0]['text']){
                // ...
            } else{
                $query = $connect->prepare("UPDATE products SET text=:text WHERE id=:id");
                $query->execute(
                    [
                        "id" => $_GET['id'],
                        "text" => $text
                    ]
                );
            }
            // print($data[0]['params']);
            //     print($params);
            if ($params === $data[0]['params']){
                // ...
            } else {
                $query = $connect->prepare("UPDATE products SET params=:params WHERE id=:id");
                $query->execute(
                    [
                        "id" => $_GET['id'],
                        "params" => $params
                    ]
                );
            }

            if ($categori=== $data[0]['categori']){
                // ...
            } else {
                $query = $connect->prepare("UPDATE products SET categori=:categori WHERE id=:id");
                $query->execute(
                    [
                        "id" => $_GET['id'],
                        "categori" => $categori
                    ]
                );
            }
            
           }

        // if ($img === $data[0]['img']){
        //     // ...
        // } else {
        //     $query = $connect->prepare("UPDATE products SET categori=:categori WHERE id=:id");
        //     $query->execute(
        //         [
        //             "id" => $_GET['id'],
        //             "categori" => $categori
        //         ]
        //     );
        // }

        if ($_FILES){
            $img = $this->file_save();

            $query = $connect->prepare("UPDATE products SET img=:img WHERE id=:id");
            $query->execute(
                [
                    "id" => $_GET['id'],
                    "img" => $img
                ]
            );
        }
        
       }

        
    }
    function new_categori(){
        if($_POST)
        {
            $categori_name=$_POST['categori_name'];

            $connect = new PDO(
                'mysql:host=localhost;dbname=std_54',
                 'root', 
                 '071452rdf');
            
            $response=$connect->prepare("INSERT INTO categories(categori_name) VALUES(:categori_name);");
            $response->execute(
                [
                    
                    'categori_name'=>$categori_name,
                    
                ]
            );
            
        }
    }
    

}
?>