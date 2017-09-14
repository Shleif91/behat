<?php
declare(strict_types=1);

namespace Calculator;

class Calc
{
    private $value = 0;

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(float $num): void
    {
        $this->value = $num;
    }

    public function addition(float $num): float
    {
        return $this->value += $num;
    }

    public function subtraction(float $num): float
    {
        return $this->value -= $num;
    }

    public function multiplication(float $num): float
    {
        return $this->value *= $num;
    }

    public function division(float $num): float
    {
        return $this->value /= $num;
    }
}