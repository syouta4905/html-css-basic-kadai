<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP基礎編</title>
</head>
<body>
<p>
<?php
// Foodクラス
class Food {
   private $name;
   private $price;
   // コンストラクタ
   public function __construct($name, $price) {
       $this->name = $name;
       $this->price = $price;
   }
   // priceを取得するメソッド
   public function show_price() {
       echo $this->price . "\n";
   }
}
// Animalクラス
class Animal {
   private $name;
   private $height;
   private $weight;
   // コンストラクタ
   public function __construct($name, $height, $weight) {
       $this->name = $name;
       $this->height = $height;
       $this->weight = $weight;
   }
   // heightを取得するメソッド
   public function show_height() {
       echo $this->height . "\n";
   }
}
// Foodクラスのインスタンスを作成
$food = new Food("potato", 250);
// Animalクラスのインスタンスを作成
$animal = new Animal("dog", 60, 5000);
// インスタンスを出力
echo "Food Instance:\n";
print_r($food);
echo "\nAnimal Instance:\n";
print_r($animal);
// メソッドを呼び出す
$food->show_price();
$animal->show_height();
?>
</p>
</body>
</html>