<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT apple_num FROM sample1";
$statement = $pdo->prepare($sql);
$statement->execute();
$apples = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($apples);

$apples_1 = ['apple_num'=>12];
$apples_2 = ['apple_num'=>20];
$apples_3 = ['apple_num'=>8];
$apples_4 = ['apple_num'=>35];

var_dump($apples_1);

die;
$apples_difference = [
$apples_difference_1 = $apples_1 - $apples_2,
$apples_difference_2 = $apples_2 - $apples_3,
$apples_difference_3 = $apples_3 - $apples_4
];

echo"<pre>";
var_dump($apples_difference);
echo"<pre>";


?>
