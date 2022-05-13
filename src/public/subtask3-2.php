<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT banana_num FROM sample2";
$statement = $pdo->prepare($sql);
$statement->execute();
$banana_num = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($apple_num);


rsort($banana_num);
foreach ($banana_num as $key => $val) {
   var_dump($val);
}



?>