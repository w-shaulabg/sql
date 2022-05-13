<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT orange_num FROM sample3";
$statement = $pdo->prepare($sql);
$statement->execute();
$orange_num = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($apple_num);

//die;
$sum = 0;
foreach($orange_num as $data){
$sum += $data['orange_num'];
}
var_dump($sum);
//echo $sum;
?>