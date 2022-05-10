<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT peach_num FROM sample4";
$statement = $pdo->prepare($sql);
$statement->execute();
$peach_num = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($apple_num);

//die;
$sum = 0;
foreach($peach_num as $data)
{
$sum += $data['peach_num'];
}
var_dump($sum);
//echo $sum;
?>