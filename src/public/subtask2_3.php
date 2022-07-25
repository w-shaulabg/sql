<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM users";
$statement = $pdo->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);


$nameTa = [];
foreach ($users as $user) {

  if (preg_match('/田/' , $user['name'])) {
    $nameRice_field[] = [
     $nameTa[] = $user['name'] ,
     $nameTa[] = $user['birth_place'] ,
     $nameTa[] = $user['money_in_possession']
    ];
  }

}
echo "<pre>";
echo "氏名に「田」が含まれる登録者の出身地及び氏名、並びに所持金を表示";
var_dump($nameRice_field);
echo "<pre>";


$nameMoto = [];
foreach ($users as $user) {

  if (preg_match('/本/' , $user['name'])) {
    $nameBook[] = [
     $nameMoto[] = $user['name'] ,
     $nameMoto[] = $user['birth_place'] ,
     $nameMoto[] = $user['money_in_possession']
    ];
  }

}
echo "<pre>";
echo "氏名に「本」が含まれる登録者の出身地及び氏名、並びに所持金を表示";
var_dump($nameBook);
echo "<pre>";


$namekawa = [];
foreach ($users as $user) {

  if (preg_match('/川/' , $user['name'])) {
    $nameRiver[] = [
     $namekawa[] = $user['name'] ,
     $namekawa[] = $user['birth_place'] ,
     $namekawa[] = $user['money_in_possession']
    ];
  }

}
echo "<pre>";
echo "氏名に「川」が含まれる登録者の出身地及び氏名、並びに所持金を表示";
var_dump($nameRiver);
echo "<pre>";