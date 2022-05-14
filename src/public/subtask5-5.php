<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest;charset=utf8",$dbUserName, $dbPassword);

$sql = "SELECT * FROM sample5";
$statement = $pdo->prepare($sql);
$statement -> execute();
$lemons = $statement->fetchAll(PDO::FETCH_ASSOC);

//var_dump($lemons);

//die;
$oddIdLemons = [];
foreach ($lemons as $lemon){
  if ($lemon['id'] % 2  == 1){
    $oddIdLemons[] = $lemon['lemon_num'];
  }
}
echo"<pre>";
var_dump($oddIdLemons);
echo"<pre>";

?>