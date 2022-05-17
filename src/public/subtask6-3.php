<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM sample3";
$statement = $pdo->prepare($sql);
$statement->execute();
$oranges = $statement->fetchAll(PDO::FETCH_ASSOC);

$orangeNums = [];

foreach ($oranges as $orange) {
  $orangeNums[] = $orange['orange_num'];
}

for ($i = 1; $i < count($orangeNums); $i++) {
  $orangeNumdifference[] = abs($orangeNums[$i] - $orangeNums[$i-1]);
}

echo "<pre>";
var_dump($orangeNumdifference);
echo "<pre>";
?>
