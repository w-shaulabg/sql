<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT lemon_num FROM sample5";
$statement = $pdo->prepare($sql);
$statement->execute();
$lemon_num = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($apple_num);

rsort($lemon_num);
foreach ($lemon_num as $key => $val) {
   var_dump($val);
}
?>