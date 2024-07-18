<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $pen = array("商品" => '鉛筆', "価格" => '100円', "税込価格" => '110円');
  $eraser = array("商品" => '消しゴム', "価格" => '200円', "税込価格" => '220円');
  $ruler = array("商品" => '定規', "価格" => '300円', "税込価格" => '330円');
  
  ?>

  <table border="1" style="border-collapse:collapse" width="300">
    <tr align="center">
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
    </tr>
    <tr align="center">
      <?php
      foreach ($pen as $name) {
      echo "<td>" . $name . "</td>";
      }
      ?>
    </tr>
    <tr align="center">
      <?php
      foreach ($eraser as $name) {
      echo "<td>" . $name . "</td>";
      }
      ?>
    </tr>
    <tr align="center">
      <?php
      foreach ($ruler as $name) {
      echo "<td>" . $name . "</td>";
      }
      ?>
    </tr>
  </table>
</body>
</html>