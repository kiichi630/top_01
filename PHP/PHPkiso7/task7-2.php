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
    protected $name;
    protected $age;
    protected $sex;
    protected $id;
    protected static $count = 1;

    public function __construct($name, $age, $sex) {
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
      $this -> id = self::number();
    }

    public static function number() {
      $id = '(S' . str_pad(self::$count, 4, '0', STR_PAD_LEFT) . ')';
      self::$count++;
      return $id;
    }

    public function show() {
      printf("%s %s %s %s<br>", $this -> id, $this -> name, $this -> age, $this -> sex);
    }
  }

  class PartStaff extends Staff {
    private $jikyu;

    public function __construct($name, $age, $sex, $jikyu) {
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
      $this -> jikyu = $jikyu;
      $this -> id = self::PartNumber();
    }

    public static function PartNumber() {
      $id = '(P' . str_pad(parent::$count, 4, '0', STR_PAD_LEFT) . ')';
      parent::$count++;
      return $id;
    }

    public function show() {
      printf("%s %s %s %s 時給：%s<br>", $this -> id, $this -> name, $this -> age, $this -> sex, $this -> jikyu);
    }
  }

  $staffs = [];
  $staffs[0] = new Staff('佐藤 一郎', '31歳', '男性');
  $staffs[1] = new Staff('山田 花子', '25歳', '女性');
  $staffs[2] = new Staff('鈴木 次郎', '27歳', '男性');
  $staffs[3] = new PartStaff('田中 友子', '24歳', '女性', '900円');
  $staffs[4] = new Staff('中村 三郎', '27歳', '男性');

  foreach ($staffs as $staff) {
    $staff->show();
  }
  ?>
</body>
</html>