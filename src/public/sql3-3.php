<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM spendings";
$statement = $pdo->prepare($sql);
$statement->execute();
$expense3 = $statement->fetchAll(PDO::FETCH_ASSOC);


$march = [];
$amount = [];
foreach ($expense3 as $expense) {

  if (preg_match("/-03-/", $expense['accrual_date'])) {
    $march[] = $expense['name'];
    $amount[] = $expense['amount'];
  }

}

echo "3月の支出";

for ($i = 0; $i < count($march); $i++);

for ($i = 0; $i < count($amount); $i++) {
  
  echo "<pre>";
  echo $march[$i] . ":" . $amount[$i];
  echo "<pre>";
  
}

?>