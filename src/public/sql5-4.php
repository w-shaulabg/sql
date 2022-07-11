<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM spendings";
$statement = $pdo->prepare($sql);
$statement->execute();
$spendings = $statement->fetchAll(PDO::FETCH_ASSOC);

$amount = [];
$month = [];
foreach ($spendings as $spending) {
  $date = explode("-", $spending['accrual_date']);
  $month = abs($date[1]);
  $day = abs($date[2]);

  if (preg_match('/5/', $day)||
      preg_match('/15/', $day)||
      preg_match('/25/', $day)) {
      $amount[$month] += $spending['amount'] - 1500; 
    continue;
  }
  $amount[$month] += $spending['amount'];
}

echo "月順にsortして月ごとの支出の合計を一覧表示。ただし、支出日に5が含まれている時だけ1500円引いてください。";

foreach ($amount as $mon => $total_amount) {
  echo "<pre>";
  echo ($mon . "月:" . $total_amount);
  echo "<pre>";
}

?>