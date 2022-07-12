<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM spendings";
$statement = $pdo->prepare($sql);
$statement->execute();
$spendings = $statement->fetchAll(PDO::FETCH_ASSOC);

$amount = [];
$month = 0;
foreach ($spendings as $spending) {
  $date = explode("-", $spending['accrual_date']);
  $month = abs($date[1]);
  $amount[$month] += $spending['amount']; 
}

for ($i = 1 ; $i < count($amount); $i++) {
  $amountDifference[$i] = abs($amount[$i] - $amount[$i+1]);
}

echo "前月の支出との差分を一覧表示してください。";

foreach ($amountDifference as $month => $difference) {
  $month_forward = $month;
  $month_backward = $month + 1;
  echo "<pre>";
  echo $month_forward . "月と" . $month_backward  .  "月の差分:" .  $difference;
  echo "<pre>";
}

?>