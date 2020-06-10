<?php
require_once "DB.php";
echo "Hello";
echo "<br>";
$MYSQL_DbInstance = DB::getInstance("mysql");
$Postgree_DbInstance = DB::getInstance("postgree");
$Postgree_DbInstance2 = DB::getInstance("postgree");


echo $MYSQL_DbInstance->connect("usarb.md");
echo "<br>";
echo $Postgree_DbInstance->connect("usm.md");
echo "<br>";
echo $Postgree_DbInstance2->connect("fisc.md");
echo "<br>";
var_dump($MYSQL_DbInstance);
var_dump($Postgree_DbInstance);
var_dump($Postgree_DbInstance2);
?>