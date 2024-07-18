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
  if (3 <= $a && $a <= 5) {
    $season = "春";
  } elseif (6 <= $a && $a <= 8) {
    $season = "夏";
  } elseif (9 <= $a && $a <= 11) {
    $season = "秋";
  } else {
    $season = "冬";
  }
  ?>

  <p><?= $a ?>月は<?= $season ?>の季節です。</p>
</body>
</html>