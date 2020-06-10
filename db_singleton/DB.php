<?php
class DB{

    private static $instance = null;
    private $dbName = null;

    private function __construct(){}

    public static function getInstance(){
        if(self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function connect($dbName) {
        $this->dbName = $dbName;
        return "Connected to DB: " . $this->dbName;
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
