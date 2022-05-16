<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT apple_num FROM sample1";
$statement = $pdo->prepare($sql);
$statement->execute();
$apple_num = $statement->fetchAll(PDO::FETCH_ASSOC);

sort ($apple_num);
$oddIdApples = [];
foreach ($apple_num as $apples =>$apple) {
   $oddIdApples = $apple['apple_num'];
   echo "<pre>";
   echo $oddIdApples; //var_dump($oddIdApples);
   echo "<pre>";
}

?>