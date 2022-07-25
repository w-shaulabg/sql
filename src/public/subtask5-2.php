<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM sample2";
$statement = $pdo->prepare($sql);
$statement->execute();
$bananas = $statement->fetchAll(PDO::FETCH_ASSOC);

$oddIdBananas = [];
foreach ($bananas as $banana) {
  if ($banana['id'] % 2 == 1) {
    $oddIdBananas[] = $banana['banana_num'];
  }
}
echo "<pre>";
var_dump($oddIdBananas);
echo "<pre>";

?>