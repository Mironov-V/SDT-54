<?php
// Включение вывода ошибок
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', '1');

class Admin{
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

            if($_FILES)
            {
                $path='../../media/'.$_FILES['img']['name'];
               // $file=$pach.basename($_FILES['img']['name']);
                //$getFile=getimagesize($_FILES['img']['tmp_name']);
                move_uploaded_file($_FILES['img']['tmp_name'],$path);

            }
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
        
    function all_categories($p){ //
        $connect = new PDO(
            'mysql:host=localhost;dbname=std_54',
             'root', 
             '071452rdf'
          );
        //   print_r($connect->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC));
        return $connect->query("SELECT * FROM {$p}")->fetchAll(PDO::FETCH_ASSOC);//вызываем тригер который возвращает все значения без передачи параметров
    
        

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