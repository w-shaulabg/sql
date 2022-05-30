<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM users";
$statement = $pdo->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

$kenUsers = [];
foreach ($users as $user) {

  if (preg_match("/県/" , $user['birth_place'])) {
    $prefecture_ken[] = [
      $kenUsers[] = $user['name'],
      $kenUsers[] = $user['birth_place'],
      $kenUsers[] = $user['money_in_possession']
    ];
  }
  
}

echo "<pre>";
echo "出身地に「県」が含まれる登録者の氏名及び出身地並びに所持金を表示" . "\n";
var_dump($prefecture_ken);
echo "<pre>";


$huUsers = [];
foreach ($users as $user) {

  if (preg_match("/府/" , $user['birth_place'])) {
    $prefecture_hu[] = [
      $huUsers[] = $user['name'],
      $huUsers[] = $user['birth_place'],
      $huUsers[] = $user['money_in_possession']
    ];
  }
  
}

echo"<pre>";
echo "出身地に「府」が含まれる登録者の氏名及び出身地並びに所持金を表示" . "\n";
var_dump($prefecture_hu);
echo"<pre>";


$mtUsers = [];
foreach ($users as $user) {

  if (preg_match_all("/山/" , $user['birth_place'])) {
    $prefecture_mt[] = [
      $mtUsers[] = $user['name'],
      $mtUsers[] = $user['birth_place'],
      $mtUsers[] = $user['money_in_possession']
    ];
  }

}

echo "<pre>";
echo "出身地に「山」が含まれる登録者の氏名及び出身地並びに所持金を表示" . "\n";
var_dump($prefecture_mt);
echo "<pre>";