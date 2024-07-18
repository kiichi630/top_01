<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $pen = array("商品" => '鉛筆', "価格" => 100);
  $eraser = array("商品" => '消しゴム', "価格" => 200);
  ?>

  <table border="1" style="border-collapse: collapse" width="400">
    <tr align="center">
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
      <th>1Dzの価格</th>
    </tr>
    <tr align="center">
      <td><?= $pen[商品]; ?></td>
      <td><?= $pen[価格] . "円"; ?></td>
      <td><?= $pen[価格] * 1.1 . "円"; ?></td>
      <td><?= $pen[価格] * 1.1 * 12 . "円"; ?></td>
    </tr>
    <tr align="center">
      <td><?= $eraser[商品]; ?></td>
      <td><?= $eraser[価格] . "円"; ?></td>
      <td><?= $eraser[価格] *1.1 . "円"; ?></td>
      <td><?= $eraser[価格] *1.1 * 12 . "円"; ?></td>
    </tr>
  </table>
</body>
</html>