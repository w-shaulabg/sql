<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM sample1";
$statement = $pdo->prepare($sql);
$statement->execute();
$apples = $statement->fetchAll(PDO::FETCH_ASSOC);

$appleNums = [];

foreach ($apples as $apple) { 
  $appleNums[] = $apple['apple_num'];
}

for ($i = 1; $i < count($appleNums); $i++) {
  $appleNumDifference[] = abs($appleNums[$i] - $appleNums[$i-1]);
}

echo"<pre>";
var_dump($appleNumDifference);
echo"<pre>";
?>
