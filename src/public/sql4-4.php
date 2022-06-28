<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM incomes";
$statement = $pdo->prepare($sql);
$statement->execute();
$incomes = $statement->fetchAll(PDO::FETCH_ASSOC);

$amount = [];
$month = [];
foreach ($incomes as $income) {
  $date = explode("-", $income['accrual_date']);
  $month = abs($date[1]);     //絶対値01⇨１
  $amount[$month] += $income['amount'];   //$amount[1〜12月]　+=　1〜12月該当する支出のそれぞれの合計
}

echo "月順にsortして月ごとの収入の合計を一覧表示";

foreach ($amount as $mon => $total_amount) {   //キー(1〜１２月) =>　支出の合計　連想配列として結び付ける
  echo "<pre>";
  echo ($mon. "月:" . $total_amount);
  echo "<pre>";
}

?>