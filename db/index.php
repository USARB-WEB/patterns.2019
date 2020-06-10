<?php
require_once "DB.php";
echo "Hello";
echo "<br>";
$dbInstance = new DB();
echo $dbInstance->connect();
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
?>