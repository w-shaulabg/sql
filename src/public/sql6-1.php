<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM incomes";
$statement = $pdo->prepare($sql);
$statement->execute();
$incomes = $statement->fetchAll(PDO::FETCH_ASSOC);

$amount = [];
$month = [];
foreach ($incomes as $income) {
  $date = explode("-", $income['accrual_date']);
  $month = abs($date[1]);
  $amount[$month] += $income['amount']; 
}

for ($i = 1 ; $i < count($amount); $i++) {
  $amountDifference[$i] = abs($amount[$i] - $amount[$i+1]);
}

foreach ($amountDifference as $month => $difference) {
  $month_forward = $month;
  $month_backward = $month + 1;
  echo "<pre>";
  echo $month_forward . "月と" . $month_backward  .  "月の差分:" .  $difference;
  echo "<pre>";
}

?>