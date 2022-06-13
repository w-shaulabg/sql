<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM spendings";
$statement = $pdo->prepare($sql);
$statement->execute();
$expense1 = $statement->fetchAll(PDO::FETCH_ASSOC);


$january = [];
$amount = [];
foreach ($expense1 as $expense) {

  if (preg_match("/-01-/", $expense['accrual_date'])) {
    $january[] = $expense['name'];
    $amount[] = $expense['amount'];
  }

}

echo "1月の支出";

for ($i = 0; $i < count($january); $i++);

for ($i = 0; $i < count($amount); $i++) {
  
  echo "<pre>";
  echo $january[$i] . ":" . $amount[$i];
  echo "<pre>";
  
}

?>
