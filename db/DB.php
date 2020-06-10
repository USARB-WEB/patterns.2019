<?php
class DB{
    public function connect() {
        return "Connected to DB";
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
