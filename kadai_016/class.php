<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP課題</title>
</head>

<body>
   <p>
    <?php
    // Foodクラスを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // 価格を出力するメソッド
      public function show_price() {
        echo $this->price;
      }
    }


     // Animalクラスを定義する
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // 身長を出力するメソッド
      public function show_height() {
        echo $this->height;
      }
    }


     // Foodクラスのインスタンスを作成する
     $food = new Food('potato', 250);

     // Animalクラスのインスタンスを作成する
     $animal = new Animal('dog', 60, 5000);


     // インスタンスを出力する
     print_r($food);
     echo '<br>';
     print_r($animal);
     echo '<br>';

     // メソッドにアクセスする
     $food->show_price();
     echo '<br>';

     $animal->show_height();

    ?>
   </p>
</body>

</html>