<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $a = mt_rand(1, 100);
  if (1 <= $a && $a <= 5) {
    $fortune = "今日の運勢は”大凶”です。";
  } elseif (6 <= $a && $a <= 20) {
    $fortune = "今日の運勢は”凶”です。";
  } elseif (21 <= $a  && $a <= 50) {
    $fortune = "今日の運勢は”吉”です。";
  } elseif (51 <= $a && $a <= 80) {
    $fortune = "今日の運勢は”中吉”です。";
  } else {
    $fortune = "今日の運勢は”大吉”です。";
  }
  ?>

  <?= $fortune; ?>
</body>
</html>