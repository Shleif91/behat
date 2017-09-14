<?php
declare(strict_types=1);

namespace Calculator;

class Calc
{
    private $value = 0;

    private $numbers = [];

    public function addition(): float
    {
        foreach ($this->numbers as $number) {
            $this->value += $number;
        }

        return $this->value;
    }

    public function subtraction(): float
    {
        foreach ($this->numbers as $number) {
            $this->value += $number;
        }

        return $this->value;
    }

    public function multiplication(): float
    {
        foreach ($this->numbers as $number) {
            $this->value += $number;
        }

        return $this->value;
    }

    public function division(): float
    {
        foreach ($this->numbers as $number) {
            $this->value += $number;
        }

        return $this->value;
    }

    public function addNumber(float $number)
    {
        $this->numbers[] = $number;
    }
}