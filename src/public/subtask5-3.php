<?php
  $dbUserName = "root";
  $dbPassword = "password";
  $pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8" , $dbUserName, $dbPassword);

  $sql = "SELECT * FROM sample3";
  $statement = $pdo->prepare($sql);
  $statement -> execute();
  $oranges = $statement->fetchAll(PDO::FETCH_ASSOC);

  $oddIdOranges = [];
  foreach ($oranges as $orange) { 
    if($orange['id'] % 2 == 1) {
      $oddIdOranges[] = $orange['orange_num'];
    }
  }
echo "<pre>";
var_dump($oddIdOranges);
echo "<pre>";

?>
