<?php
require_once "DB.php";
echo "Hello";
echo "<br>";
$dbInstance = DB::getInstance();

echo $dbInstance->connect("db1");
echo "<br>";
echo $dbInstance->insert();
echo "<br>";
echo $dbInstance->insert();
echo "<br>";
echo "Get DB info";
echo "<br>";
foreach ($dbInstance->select() as $item) {
    echo $item['name'];
    echo ',';
}
echo "<br>";
echo $dbInstance->delete();
echo "<br>";
echo $dbInstance->update();
$dbInstance2 = DB::getInstance();
echo $dbInstance2->connect("db2");
echo "<br>";
$dbInstance3 = new DB();
echo $dbInstance3->connect("db3");
echo "<br>";

var_dump($dbInstance);
var_dump($dbInstance2);
var_dump($dbInstance3);
?>