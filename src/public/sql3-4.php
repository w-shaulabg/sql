<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM spendings";
$statement = $pdo->prepare($sql);
$statement->execute();
$expense4 = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($expense4 as $key => $value) {
  $expense[$key] = $value['accrual_date'];
}

array_multisort ($expense, SORT_ASC, $expense4);

echo "日付順にsortして一覧表示" . "\n";

foreach ($expense4 as $key => $value) {
  echo "<pre>";
  echo ($value['name'] . ":" . $value['amount']);
  echo "<pre>";
}


//以下メモ書き

/*die;
foreach($sort1 as $key => $value) {
echo "<pre>";
var_dump($value);
echo "<pre>";
}

$name = [];
$money = [];
foreach ($expense4 as $key => $value) {
  //$key['name'] = $value['name'];
 
  echo "<pre>";
  echo ($expense4/*['name'] . ":" . $value['amount']);
  echo "<pre>";
}*/

?>