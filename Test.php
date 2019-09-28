<?php


class Test
{
    private $name = 'Test 1';

    public function setName ($name) {
        $this->name = $name;
    }

    public function getName () {
        return $this->name;
    }

    public function someMethod()
    {

    }
}


$someObject = new Test();

echo $someObject->getName();
$someObject->setName('Test 2');
echo $someObject->getName();


