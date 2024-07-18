<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $a = mt_rand(1, 12);
  switch ($a) {
    case 3 <= $a && $a <= 5 :
      $season = "春";
      break;
    case 6 <= $a && $a <= 8 :
      $season = "夏";
      break;
    case 9 <= $a && $a <= 11 :
      $season = "秋";
      break;
    default : $season = "冬";
  }
  ?>

  <p><?= $a ?>月は<?= $season ?>の季節です。</p>
</body>
</html>