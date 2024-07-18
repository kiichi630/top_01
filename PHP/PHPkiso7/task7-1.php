<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  ini_set("display_errors", "1");
  class Staff {
    private $name;
    private $age;
    private $sex;
    private $id;
    private static $count = 1;

    public function __construct($name, $age, $sex, $id) {
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
      $this -> id = $id;
    }

    public static function number() {
      $id = '(S' . str_pad(self::$count, 4, '0', STR_PAD_LEFT) . ')';
      self::$count++;
      return $id;
    }

    public function show() {
      printf("%s %s %s %s<br>",$this -> id, $this -> name, $this -> age, $this -> sex);
    }
  }

  $staffs = [];
  $staffs[0] = new Staff('佐藤 一郎', '31歳', '男', Staff::number());
  $staffs[1] = new Staff('山田 花子', '25歳', '女', Staff::number());
  $staffs[2] = new Staff('鈴木 次郎', '27歳', '男', Staff::number());

  $staffs[0]->show();
  $staffs[1]->show();
  $staffs[2]->show();
  ?>
</body>
</html>