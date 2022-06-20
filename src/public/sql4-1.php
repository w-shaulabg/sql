<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM incomes";
$statement = $pdo->prepare($sql);
$statement->execute();
$incomes = $statement->fetchAll(PDO::FETCH_ASSOC);

$amount = [];
foreach ($incomes as $income) {
  if (preg_match('/-04-/', $income['accrual_date'])) {
    $amount[] = $income['amount'];
    }
}

$april_amount = array_sum($amount);

echo "4月の収入の合計:" . $april_amount;

?>