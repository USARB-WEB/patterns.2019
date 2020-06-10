<?php
require_once "DB.php";
echo "Hello";
echo "<br>";
$dbInstance = new DB();
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
$dbInstance2 = new DB();
echo $dbInstance2->connect("db2");

var_dump($dbInstance);
var_dump($dbInstance2);
?>