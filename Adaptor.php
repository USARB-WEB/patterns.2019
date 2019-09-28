<?php

class Aritmetica {
    public function suma($object){
        return $object['x'] + $object['y'];
    }
}


class Adaptor
{

}



$a = new Aritmetica();
$object = [
    'x' => 2,
    'y' => 4
];
echo $a->suma($object);
