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

asort($amount);

echo "収入の低い順にsortして月ごとの収入の合計を一覧表示";

foreach ($amount as $mon => $total_amount) {
  echo "<pre>";
  echo ($mon . "月:" . $total_amount);
  echo "<pre>";
}

?>