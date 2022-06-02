<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM users ";
$statement = $pdo->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

$more_five_thousand = [];
foreach ($users as $user) {
  if ($user['birth_place'] === '東京都' 
    && $user['money_in_possession'] >= 5000) {
    $more_five_thousand[] = [$user['name'] , $user['birth_place'] , $user['money_in_possession']];
  }
}
echo "<pre>";
echo "出身地が東京都かつ所持金が5000円以上" . "\n";
var_dump($more_five_thousand);
echo "<pre>";


$under_five_thousand = [];
foreach ($users as $user) {
  if ($user['birth_place'] === '東京都' 
    && $user['money_in_possession'] < 5000) {
    $under_five_thousand[] = [$user['name'] , $user['birth_place'] , $user['money_in_possession']];
  }
}
echo "<pre>";
echo "出身地が東京都かつ所持金が5000円未満" . "\n";
var_dump($under_five_thousand);
echo "<pre>";


$prefecture_ken = [];
foreach ($users as $user) {
  if (preg_match("/県/" , $user['birth_place']) 
    && $user['money_in_possession'] %2 == 0) {
    $prefecture_ken[] = [$user['name'] , $user['birth_place'] , $user['money_in_possession']];
  }
}
echo "<pre>";
echo "出身地に\"県\"が含まれるかつ所持金の末尾が偶数" . "\n";
var_dump($prefecture_ken);
echo "<pre>";


$prefecture_lessKen = [];
foreach ($users as $user) {
  if (is_bool(preg_match("/県/" , $user['birth_place'])) !== false 
    && $user['money_in_possession'] %2 == 1) {
    $prefecture_lessKen[] = [$user['name'] , $user['birth_place'] , $user['money_in_possession']];
  }
}
if (count($prefecture_lessKen) === 0) {
  $prefectureLessKen[] = "該当なし";
}
echo "<pre>";
echo "出身地に\"県\"が含まれないかつ所持金の末尾が奇数" . "\n";
var_dump($prefectureLessKen);
echo "<pre>";


$nameTaEven = [];
foreach ($users as $user) {
  if (preg_match("/田/" , $user['name']) 
    && $user['money_in_possession'] %2 == 0) {
    $nameTaEven[] = [$user['name'] , $user['birth_place'] , $user['money_in_possession']];
  }
}
echo "<pre>";
echo "名前に\"田\"が含まれるかつ所持金の末尾が偶数" . "\n";
var_dump($nameTaEven);
echo "<pre>";


$nameTaOdd = [];
foreach ($users as $user) {
  if (preg_match("/田/" , $user['name']) 
    && $user['money_in_possession'] %2 == 1) {
    $nameTaOdd[] = [$user['name'] , $user['birth_place'] , $user['money_in_possession']];
  }
}
if (count($nameTaOdd) == 0) {
  $nameTaOddLess[] = "該当なし";
}

echo "<pre>";
echo "名前に\"田\"が含まれるかつ所持金の末尾が奇数" . "\n";
var_dump($nameTaOddLess);
echo "<pre>";


$nameRiver_fiveThousand = [];
foreach ($users as $user) {
  if (preg_match("/川/" , $user['name']) 
    && $user['birth_place'] === '東京都' 
    && $user['money_in_possession'] >= 5000) {
    $nameRiver_fiveThousand[] = [$user['name'] , $user['birth_place'] , $user['money_in_possession']];
  }
}
echo "<pre>";
echo "名前に\"川\"が含まれるかつ\"東京都\"出身で所持金が5000円以上" . "\n";
var_dump($nameRiver_fiveThousand);
echo "<pre>";


$nameMoto_threeThousand = [];
foreach ($users as $user) {
  if (preg_match("/本/" , $user['name']) 
    && preg_match("/県/" , $user['birth_place']) 
    && $user['money_in_possession']  < 3000) {
    $nameMoto_threeThousand[] = [$user['name'] , $user['birth_place'] , $user['money_in_possession']];
  }
}
echo "<pre>";
echo "名前に\"本\"が含まれるかつ出身地に\"県\"が含まれており所持金が3000円未満" . "\n";
var_dump($nameMoto_threeThousand);
echo "<pre>";


$nameFujiYamaTa = [];
foreach ($users as $user) {
  if ((preg_match("/藤/" , $user['name']) || preg_match("/山/" , $user['name']) || preg_match("/田/" , $user['name']))
    && preg_match("/県/" , $user['birth_place']) == false 
    && $user['money_in_possession']  >= 5000) {
    $nameFujiYamaTa [] = [$user['name'] , $user['birth_place'] , $user['money_in_possession']];
  }
}

echo "<pre>";
echo "名前に\"藤\"、\"田\"、\"山\"のいずれかが含まれ、出身地に\"県\"を含まず、所持金が5000円以上" . "\n";
var_dump($nameFujiYamaTa);
echo "<pre>";


$nameKawaYamaMura = [];
foreach ($users as $user) {
  if (!(preg_match("/川/" , $user['name']) || preg_match("/山/" , $user['name']) || preg_match("/村/" , $user['name']))) {
    continue;
  }
  
  if (!(preg_match("/県/" , $user['birth_place']) || preg_match("/京/" , $user['birth_place']))) {
    continue;
  }

  if (!($user['money_in_possession'] >= 5000)) {
    continue;
  }

  $nameKawaYamaMura[] = [$user['name'] , $user['birth_place'] , $user['money_in_possession']];
}

echo "<pre>";
echo "名前に\"川\"、\"山\"、\"村\"のいずれかが含まれ、出身地に\"県\"もしくは\"京\"を含み、所持金が5000円以上" . "\n";
var_dump($nameKawaYamaMura);
echo "<pre>";

?>
