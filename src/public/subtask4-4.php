<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT peach_num FROM sample4";
$statement = $pdo->prepare($sql);
$statement->execute();
$peach_num = $statement->fetchAll(PDO::FETCH_ASSOC);

sort($peach_num);
foreach ($peach_num as $key => $val) {
    var_dump($val);
}