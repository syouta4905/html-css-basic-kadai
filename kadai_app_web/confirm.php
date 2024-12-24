<?php
 $name = $_POST['employee_name'];
 $age = $_POST['employee_age'];
 $department = $_POST['department'];
 ?>

<!DOCTYPE html>
<html lang="ja">

<head>
 <meta charset="UTF-8">
 <title>確認フォーム</title>
</head>

<body>
 <h1>確認フォーム</h1>
 <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

 <table border="1">
  <tr>
   <th>項目</th>
   <th>入力内容</th>
  </tr>
  <tr>
    <td>社員名</td>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
   <td>年齢</td>
   <td><?php echo $age; ?></td>
  </tr>
  <tr>
   <td>所属部署</td>
   <td><?php echo $department; ?></td>
  </tr>
</table>
<br>
<input type="hidden" name="employee_name" value="<?php echo htmlspecialchars($_POST['employee_name'], ENT_QUOTES, 'UTF-8'); ?>">
<input type="hidden" name="employee_age" value="<?php echo htmlspecialchars($_POST['employee_age'], ENT_QUOTES, 'UTF-8'); ?>">
<input type="hidden" name="department" value="<?php echo htmlspecialchars($_POST['department'], ENT_QUOTES, 'UTF-8'); ?>">
<button type="submit">確定</button>
</form>
<form action="form.php" method="post">
<button type="submit">キャンセル</button>
</form>

</body>
</html>