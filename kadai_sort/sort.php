<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP基礎編</title>
</head>
<body>
<p>
<?php
       
       function sort_2way(array $array, bool $order) {
           if ($order) {
               // 昇順ソート
               sort($array); 
           } else {
               // 降順ソート
               rsort($array); 
           }
           // ソート結果を1行ずつ表示
           foreach ($array as $value) {
               echo $value . "<br>";
           }
       }
       // ソートする配列を宣言
       $nums = [15, 4, 18, 23, 10];
       echo "昇順にソートします。<br>";
       sort_2way($nums, true); // 昇順ソート
       echo "<br>降順にソートします。<br>";
       sort_2way($nums, false); // 降順ソート
       ?>
</p>
</body>
</html>