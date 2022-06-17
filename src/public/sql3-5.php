<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM spendings";
$statement = $pdo->prepare($sql);
$statement->execute();
$spendings = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($spendings as $spending) {
  $descending_order[] = $spending['amount'];
}

rsort($descending_order);

echo "支出の高い順" . "\n";

for ($i = 0; $i < count($descending_order); $i++) {
  echo "<pre>"; 
  echo($descending_order[$i]);
  echo "<pre>";
}

?>