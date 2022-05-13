<?php
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=tq_quest; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT apple_num FROM sample1 ORDER BY apple_num DESC";
$statement = $pdo->prepare($sql);
$statement->execute();
$apple_num = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($apple_num);

/*$sorted_ary = [];
$count = 0;*/
foreach ( $apple_num as $key => $val ) {
  //echo $key, $val;
  var_dump( $val);
 }

/*while($count < count($apple_num)) {
 $tmp = null;
 foreach ( $apple_num as $key => $val ) 
 {
   if (in_array($val, $sorted_ary)) continue;
   if ($tmp === null) {
     $tmp = $val;
   } else {
     $tmp = min($tmp, $val);
   }
 }
 $sorted_ary[] = $tmp;
 $count++;
}*/

//var_dump($apple_num);

//echo $apple_num;

?>