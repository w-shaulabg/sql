<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT apple_num FROM sample1";
$statement = $pdo->prepare($sql);
$statement->execute();
$apple_num = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($apple_num);

//die;
$sum = 0;
foreach($apple_num as $data){
$sum += $data['apple_num'];
}
var_dump($sum);
//echo $sum;
?>