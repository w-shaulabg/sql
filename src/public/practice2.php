<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM practice2";
$statement = $pdo->prepare($sql);
$statement->execute();
$practice2 = $statement->fetchAll(PDO::FETCH_ASSOC);


$january_money = [];
foreach ($practice2 as $practice) {
  if ($practice['month'] === '1') {
    $january_money[] = $practice['saving'];
    $january = $practice['month'];
  }
}
$januaryNum = array_sum ($january_money);

echo "<pre>";
echo ($january . "月の貯金額：" . $januaryNum . "円");
echo "<pre>";


$february_money = [];
foreach ($practice2 as $practice) {
  if ($practice['month'] === '2') {
    $february_money[] = $practice['saving'];
    $february = $practice['month'];
  }
}
$februaryNum = array_sum ($february_money);
 
echo "<pre>";
echo ($february . "月の貯金額：" . $februaryNum . "円");
echo "<pre>";


$march_money = [];
foreach ($practice2 as $practice) {
  if ($practice['month'] === '3') {
    $march_money[] = $practice['saving'];
    $march = $practice['month'];
  }
}
$marchNum = array_sum ($march_money);
 
echo"<pre>";
echo($march . "月の貯金額：" . $marchNum . "円");
echo"<pre>";


$april_money = [];
foreach ($practice2 as $practice) {
  if ($practice['month'] === '4') {
    $april_money[] = $practice['saving'];
    $april = $practice['month'];
  }
 }
$aprilNum = array_sum ($april_money);
 
echo"<pre>";
echo($april . "月の貯金額：" . $aprilNum . "円");
echo"<pre>";

?>