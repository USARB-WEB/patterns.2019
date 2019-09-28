<?php

class SuperFormula {
    public function calculateStep1($x)
    {
        return $x * $x;
    }

    public function calculateStep2($x)
    {
        return $x + $x;
    }

    public function calculateStep3($x, $y)
    {
        return $x * $y;
    }
}


class Facade
{

}

$f = new SuperFormula();

$x = 2;
$y = 3;

if($x > 0) {
    $x = $f->calculateStep1($x);
    if($x < 1000) {
        $x = $f->calculateStep2($x);
        if($x > 1000 && $y > 0) {
            $x = $f->calculateStep3($x, $y);
        }
    }
}

