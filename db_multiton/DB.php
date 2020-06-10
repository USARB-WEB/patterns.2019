<?php
class DB{

    private static $instance = [];
    private $dbName = null;

    public function connect($dbName) {
        $this->dbName = $dbName;
        return "Connected to DB: " . $this->dbName;
    }

    public static function getInstance($instanceName){
        if(self::$instance[$instanceName] === null) {
            self::$instance[$instanceName] = new self();
        }
        return self::$instance[$instanceName];
    }

    public function select() {
        return [
            [
                "name" => "Ion Creanga",
                "age" => 123
            ],
            [
                "name" => "Mihai Eminescu",
                "age" => 321
            ]
        ];
    }

    function insert() {
        return "Data inserted";
    }

    public function delete() {
        return "Data delete";
    }

    public function update() {
        return "Data updated";
    }
}
