<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM sample5";
$statement = $pdo->prepare($sql);
$statement->execute();
$lemons = $statement->fetchAll(PDO::FETCH_ASSOC); 

$lemonNums = [];

foreach ($lemons as $lemon) {
  $lemonNums[] = $lemon['lemon_num'];
}

for ($i = 1; $i < count($lemonNums); $i++) {
  $lemonNumdifference[] = abs($lemonNums[$i] - $lemonNums[$i-1]);
}

echo"<pre>";
var_dump($lemonNumdifference);
echo"<pre>";
?>