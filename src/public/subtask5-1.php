<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM sample1";
$statement = $pdo->prepare($sql);
$statement->execute();
$apples = $statement->fetchAll(PDO::FETCH_ASSOC);

$oddIdApples = [];//データベースから取得したものを新たに配列として作る。
foreach ($apples as $apple) {
  /*echo"<pre>";
  var_dump($apple);
  echo"<pre>";
  //die;*/
  if ($apple['id'] % 2 == 1) {//連想配列を作り、奇数を出す計算に該当するものを表示する。
     $oddIdApples[] = $apple['apple_num'];//[]内に指定したいカラムを書く。指定しない場合は”id”と”apple_num"の両方が表示される。
  }
}

echo "<pre>";//HTMLのタグで囲むことにより、改行して表示される。
var_dump($oddIdApples);
echo "<pre>";

?>