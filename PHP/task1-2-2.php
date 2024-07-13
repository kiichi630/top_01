<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
  $pen = '鉛筆';
  $pen_price = '100';
  $eraser = '消しゴム';
  $eraser_price = '200';
  define('TAX', '10%')
  ?>
  
  <p>現在、消費税は<?= TAX; ?>です。</p>
  <p><?= $pen ?>が<?= $pen_price ?>円で税込<?= $pen_price * 1.1 ?>円です。</p>
  <p><?= $eraser ?>が<?= $eraser_price ?>円で税込<?= $eraser_price * 1.1 ?>円です。</p>
  

</body>
</html>