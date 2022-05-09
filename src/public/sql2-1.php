<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT amount FROM incomes ";
$statement = $pdo->prepare($sql);
$statement->execute();
$amount = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($amount);

//die;
$sum = 0;
foreach ($amount as $data) {
  $sum += $data['amount'];
}

echo "incomesテーブルのamountカラムの合計:" . $sum;

?>