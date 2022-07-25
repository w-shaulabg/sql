<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM spendings";
$statement = $pdo->prepare($sql);
$statement->execute();
$spendings = $statement->fetchAll(PDO::FETCH_ASSOC);


$amount = [];
foreach ($spendings as $spending) {
  if (preg_match("/-02-/", $spending['accrual_date'])) {
    $amount[$spending['name']] = $spending['amount'];
  }
}

echo "2月の支出";

foreach ($amount as $key => $value) {
  echo "<pre>";
  echo ($key . ":" . $value);
  echo "<pre>";
}

?>