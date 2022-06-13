<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM spendings";
$statement = $pdo->prepare($sql);
$statement->execute();
$expense2 = $statement->fetchAll(PDO::FETCH_ASSOC);


$february = [];
$amount = [];
foreach ($expense2 as $expense) {

  if (preg_match("/-02-/", $expense['accrual_date'])) {
    $february[] = $expense['name'];
    $amount[] = $expense['amount'];
  }

}

echo "2月の支出";

for ($i = 0; $i < count($february); $i++);

for ($i = 0; $i < count($amount); $i++) {
  
  echo "<pre>";
  echo $february[$i] . ":" . $amount[$i];
  echo "<pre>";
  
}

?>