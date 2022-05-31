<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM users";
$statement = $pdo->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);


$five_thousand_yen_or_more = [];
foreach ($users as $user) {
  if ($user['money_in_possession'] >= 5000) {
    $five_thousand_yen_or_more[] = [
      $user['name'] , 
      $user['birth_place'] , 
      $user['money_in_possession']
    ];
  }
}
echo "<pre>";
echo "所持金が５０００円以上の登録者" . "\n";
var_dump($five_thousand_yen_or_more);
echo "<pre>";


$less_than_5_thousand_yen = [];
foreach ($users as $user) {
  if ($user['money_in_possession'] < 5000) {
    $less_than_5_thousand_yen[] = [
      $user['name'] , 
      $user['birth_place'] , 
      $user['money_in_possession']
    ];
  }
}
echo "<pre>";
echo "所持金が５０００円未満の登録者" . "\n";
var_dump($less_than_5_thousand_yen);
echo "<pre>";


$money_even_number = [];
foreach ($users as $user) {
  if ($user['money_in_possession'] %2 === 0) {
    $money_even_number[] = [
      $user['name'] , 
      $user['birth_place'] , 
      $user['money_in_possession']
    ];
  }
}
echo "<pre>";
echo "所持金の末尾が偶数の登録者" . "\n";
var_dump($money_even_number);
echo "<pre>";