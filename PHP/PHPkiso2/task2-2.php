<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $pen = array('商品' => '鉛筆', '価格' => '100円', '税込価格' => '110円');
  $eraser = array('商品' => '消しゴム', '価格' => '200円', '税込価格' => '220円');
  $ruler = array('商品' => '定規', '価格' => '300円', '税込価格' => '330円');
  ?>

  <table border="1" style="border-collapse: collapse" width="300">
    <tr align="center">
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
    </tr>
    <tr align="center">
      <td><?= $pen[商品]; ?></td>
      <td><?= $pen[価格]; ?></td>
      <td><?= $pen[税込価格]; ?></td>
    </tr>
    <tr align="center">
      <td><?= $eraser[商品]; ?></td>
      <td><?= $eraser[価格]; ?></td>
      <td><?= $eraser[税込価格]; ?></td>
    </tr>
    <tr align="center">
      <td><?= $ruler[商品]; ?></td>
      <td><?= $ruler[価格]; ?></td>
      <td><?= $ruler[税込価格]; ?></td>
    </tr>
  </table>
</body>
</html>