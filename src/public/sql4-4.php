<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM incomes";
$statement = $pdo->prepare($sql);
$statement->execute();
$incomes = $statement->fetchAll(PDO::FETCH_ASSOC);


$amount_01 = [];
foreach ($incomes as $income) {
  if (preg_match('/-01-/', $income['accrual_date'])) {
    $amount_01[] = $income['amount'];
  }
}

$january_amount = array_sum($amount_01);


$amount_02 = [];
foreach ($incomes as $income) {
  if (preg_match('/-02-/', $income['accrual_date'])) {
    $amount_02[] = $income['amount'];
  }
}

$february_amount = array_sum($amount_02);


$amount_03 = [];
foreach ($incomes as $income) {
  if (preg_match('/-03-/', $income['accrual_date'])) {
    $amount_03[] = $income['amount'];
  }
}

$march_amount = array_sum($amount_03);


$amount_04 = [];
foreach ($incomes as $income) {
  if (preg_match('/-04-/', $income['accrual_date'])) {
    $amount_04[] = $income['amount'];
  }
}

$april_amount = array_sum($amount_04);


$amount_05 = [];
foreach ($incomes as $income) {
  if (preg_match('/-05-/', $income['accrual_date'])) {
    $amount_05[] = $income['amount'];
  }
}

$may_amount = array_sum($amount_05);


$amount_06 = [];
foreach ($incomes as $income) {
  if (preg_match('/-06-/', $income['accrual_date'])) {
    $amount_06[] = $income['amount'];
  }
}

$june_amount = array_sum($amount_06);


$amount_07 = [];
foreach ($incomes as $income) {
  if (preg_match('/-07-/', $income['accrual_date'])) {
    $amount_07[] = $income['amount'];
  }
}

$july_amount = array_sum($amount_07);


$amount_08 = [];
foreach ($incomes as $income) {
  if (preg_match('/-08-/', $income['accrual_date'])) {
    $amount_08[] = $income['amount'];
  }
}

$august_amount = array_sum($amount_08);

$amount_09 = [];
foreach ($incomes as $income) {
  if (preg_match('/-09-/', $income['accrual_date'])) {
    $amount_09[] = $income['amount'];
  }
}

$september_amount = array_sum($amount_09);


$amount_10 = [];
foreach ($incomes as $income) {
  if (preg_match('/-10-/', $income['accrual_date'])) {
    $amount_10[] = $income['amount'];
  }
}

$october_amount = array_sum($amount_10);


$amount_11 = [];
foreach ($incomes as $income) {
  if (preg_match('/-11-/', $income['accrual_date'])) {
    $amount_11[] = $income['amount'];
  }
}

$november_amount = array_sum($amount_11);


$amount_12 = [];
foreach ($incomes as $income) {
  if (preg_match('/-12-/', $income['accrual_date'])) {
    $amount_12[] = $income['amount'];
  }
}

$december_amount = array_sum($amount_12);


$years = [];
$years = ["1月:"=>$june_amount, "2月:"=>$february_amount,"3月:"=>$march_amount,
"4月:"=>$april_amount,"5月:"=>$may_amount,"6月:"=>$june_amount,"7月:"=>$july_amount,
"8月:"=>$august_amount,"9月:"=>$september_amount,"10月:"=>$october_amount,
"11月:"=>$november_amount,"12月:"=>$december_amount];

echo "月順にsortして月ごとの収入の合計を一覧表示" . "\n";

foreach ($years as $key => $value) {
  echo "<pre>";
  echo ($key . $value);
  echo "<pre>";
}


/*メモ
echo "<pre>";
echo "1月" . $june_amount ."\n";
echo "2月" . $february_amount . "\n";
echo "3月" . $march_amount . "\n";
echo "4月" . $april_amount ."\n";
echo "5月" . $may_amount . "\n";
echo "6月" . $june_amount . "\n";
echo "7月" . $july_amount . "\n";
echo "8月" . $august_amount . "\n";
echo "9月" . $september_amount . "\n";
echo "10月" . $october_amount . "\n";
echo "11月" . $november_amount . "\n";
echo "12月" . $december_amount . "\n";
echo "<pre>";
*/

?>