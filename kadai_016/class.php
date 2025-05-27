<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food{
        //プロパティ
        private $name;
        private $price;

        //メソッドを定義
        public function set_price(string $price){
            $this->price=$price;
        }
        public function show_price(){
            echo $this->price . '<br>';
        }

        //コンストラクタを定義
        public function __construct(string $name, int $price){
            $this->name=$name;
            $this->price=$price;
        }
       }

       //インスタンス化する,
       $food=new Food('potato',250);
       //インスタンス$foodの各プロパティの値を出力する
       print_r($food);
       

    

       class Animal{
        private $name;
        private $height;
        private $weight;

        //メソッド
        public function set_height(string $height){
            $this->height=$height;
        }
        public function show_height(){
            echo $this->height . '<br>';
        }

        public function __construct(string $name,int $height, string $weight){
            $this->name=$name;
            $this->height=$height;
            $this->weight=$weight;
        }

       }
         //インスタンス化
         $animal=new Animal('dog',60,5000);
         
         print_r($animal);
         

         
         //メソッドを呼び起こす
        $food->show_price();
         $animal->show_height();

       ?>
   </p>
</body>

</html>