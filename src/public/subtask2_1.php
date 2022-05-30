<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM users";
$statement = $pdo->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

$tokyoUsers = [];                                   //$tokyoUsersが配列であることを明確にするために初期化をする。
                                                    //変数にすると値が一つしか格納されないため、[]をつけて配列であることを示す。
foreach ($users as $user) {                         //$usersのままでは全データそのものなので、＄userに変換し１行ごとの繰り返しにする。
 	if ($user['birth_place'] === '東京都') {           //$user配列の'birth_place'の値が’東京都'であれば{}の処理を実行。
 		$TokyoUsers[] = [                               //$tokyoUsers多次元配列に$userの氏名を格納。
		$tokyoUsers[] = $user['name'],                  //$tokyoUsers多次元配列に$userの出身地を格納。
 		$tokyoUsers[] = $user['birth_place'],           //$tokyoUsers多次元配列に４userの所持金を格納。
 		$tokyoUsers[] = $user['money_in_possession']    //今回必要な所持金を配列に格納。
 	  ];
 	}
}
echo "<pre>";
echo "東京都出身者の氏名及び所持金" . "\n" ;
var_dump($TokyoUsers); 
echo "<pre>";


$hokkaidoUsers = [];

foreach ($users as $user) {
	if ($user['birth_place'] === '北海道') {
		$HokkaidoUsers[] = [
		$hokkaidoUsers[] = $user['name'],
		$hokkaidoUsers[] = $user['birth_place'],
		$hokkaidoUsers[] = $user['money_in_possession']
		];
	}
}
echo "<pre>";
echo "北海道出身者の氏名及び所持金" . "\n";
var_dump($HokkaidoUsers);
echo "<pre>";
 
$tibakenUsers = [];

foreach ($users as $user) {
	if ($user['birth_place'] === '千葉県') {
		$TibakenUsers[] = [
		$tibakenUsers[] = $user['name'],
		$tibakenUsers[] = $user['birth_place'],
		$tibakenUsers[] = $user['money_in_possession']
	  ];
	}
}
echo "<pre>";
echo "千葉県出身者の氏名及び所持金" . "\n";
var_dump($TibakenUsers);
echo "<pre>";


?>