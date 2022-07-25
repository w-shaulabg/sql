<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM practice1";
$statement = $pdo->prepare($sql);
$statement->execute();
$practice = $statement->fetchAll(PDO::FETCH_ASSOC);


$month = [];
foreach ($practice as $date) {
  $date = date('Y-m-d', strtotime($date['date']));
  list($year, $month, $day) = explode('-', $date);

  echo"<pre>";
  echo $month . "月";
  echo"<pre>";

}


?>