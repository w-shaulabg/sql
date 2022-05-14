<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest;charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM sample4";
$statement = $pdo->prepare($sql);
$statement ->execute();
$peachs = $statement->fetchAll(PDO::FETCH_ASSOC);

$oddIdpeachs = [];
foreach ($peachs as $peach) {
  if ($peach['id'] % 2 == 1){
      $oddIdpeachs[] = $peach['peach_num'];
  }
}
echo"<pre>";
var_dump($oddIdpeachs);
echo"<pre>";
?>