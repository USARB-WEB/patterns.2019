<?php


class Singleton
{
    public $name = 'Singleton 1';
    private static $instance = null;

    private function __construct()
    {
        //Constructorul nu este necesar!
    }
    private function __clone()
    {
        //Interzicem crearea clonelor
    }

    public static function getInstance () {
        if(!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setName ($name) {
        $this->name = $name;
    }

    public function getName () {
        return $this->name;
    }
}

//$obj1 = new Singleton();
$obj1 = Singleton::getInstance();
$obj1->setName('Singleton 1');
$obj2 = Singleton::getInstance();
$obj2->setName('Singleton 2');

var_dump($obj1);
var_dump($obj2);
