<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM sample2";
$statement = $pdo->prepare($sql);
$statement->execute();
$bananas = $statement->fetchAll(PDO::FETCH_ASSOC);

$bananaNums = [];

foreach ($bananas as $banana) {  
  $bananaNums[] = $banana['banana_num'];
}

for ($i = 1; $i < count($bananaNums); $i++) {
  $bananaNumDifference[] = abs($bananaNums[$i] - $bananaNums[$i-1]);
}

echo"<pre>";
var_dump($bananaNumDifference);
echo"<pre>";
?>