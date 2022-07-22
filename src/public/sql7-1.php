<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT s.name
        AS spendings_name,s.category_id,s.accrual_date,s.amount, c.name,c.id
        FROM spendings
        AS s INNER JOIN categories AS c ON s.category_id = c.id;";

$statement = $pdo->prepare($sql);
$statement->execute();
$life_expenses = $statement->fetchAll(PDO::FETCH_ASSOC); 

$net_fee = [];

foreach ($life_expenses as $life) {
  if (preg_match('/通信料/', $life['name'])) {
    $net_fee[] = $life;
  }
}

echo "｢通信量｣カテゴリーの支出を一覧表示してみてください。";
echo "<br />";
foreach ($net_fee as $net => $fee) {
echo $fee['accrual_date'] . "に支払った" . $fee['spendings_name'] . "料金:" . $fee['amount'];
echo "<br />";
}

?>