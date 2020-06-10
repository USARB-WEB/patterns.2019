<?php

class Aritmetica {
    public function suma($object){
        return $object['x'] + $object['y'];
    }
}


class Adaptor
{
    public function suma($x, $y)
    {
        $a = new Aritmetica();
        $object = [
            'x' => $x,
            'y' => $y
        ];
        return $a->suma($object);
    }
}


$a = new Adaptor();
echo $a->suma(2, 4);
