<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  
  <?php
  $pen = '鉛筆が100円で税込110円です。';
  $eraser = '消しゴムが200円で税込220円です。';
  define('TAX', '現在、消費税は10%です。')
  ?>
  
  <p><?= TAX; ?></p>
  <p><?= $pen ?></p>
  <p><?= $eraser ?></p>
  
</body>
</html>