<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>PHP基礎編</title>
</hrad>

<body> 
 <p>
  <?php
      $data = [
                '名前' => '玉ねぎ',
                '値段' => 200,
                '産地' => '北海道',
            ];

            foreach ($data as $key => $value){
                echo "{$key}:{$value}<br>";
                }
            ?>
            </p>
</body>
</html>