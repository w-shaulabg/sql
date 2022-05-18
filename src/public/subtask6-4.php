<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM sample4";
$statement = $pdo->prepare($sql);
$statement->execute();
$peaches = $statement->fetchAll(PDO::FETCH_ASSOC);

$peachNums = [];

foreach ($peaches as $peach) {
  $peachNums[] = $peach['peach_num'];
}

for ($i = 1; $i < count($peachNums); $i++){
  $peachNumdifference[] = abs($peachNums[$i]-$peachNums[$i-1]);
}

echo "<pre>";
var_dump($peachNumdifference);
echo "<pre>";
?>