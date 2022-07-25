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
  if (!preg_match('/-08-/', $spending['accrual_date'])) {
    continue;
  }

  if (preg_match('/-10/', $spending['accrual_date'])||
      preg_match('/-20/', $spending['accrual_date'])||
      preg_match('/-30/', $spending['accrual_date'])) {
      $total_amount += $spending['amount'] - 500; 
    continue;
  }
  
  $total_amount += $spending['amount'];
 
}

  echo "<pre>";
  echo "8月の支出の合計:" . $total_amount;
  echo "<pre>";

?>