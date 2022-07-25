<?php

$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM spendings";
$statement = $pdo->prepare($sql);
$statement->execute();
$spendings = $statement->fetchAll(PDO::FETCH_ASSOC);

$total_amount = 0;

foreach ($spendings as $spending) {
  if (!preg_match('/-07-/', $spending['accrual_date'])) {
    continue;
  }

  if (preg_match('/-2/', $spending['accrual_date'])||
      preg_match('/-12/', $spending['accrual_date'])||
      preg_match('/-02/', $spending['accrual_date'])) {
      $total_amount += $spending['amount'] - 1000; //配列ではなく変数にすることで、上書きして使うことができる
    continue;
  }
  
  $total_amount += $spending['amount'];
 
}

  echo "<pre>";
  echo "7月の支出の合計:" . $total_amount;
  echo "<pre>";

?>