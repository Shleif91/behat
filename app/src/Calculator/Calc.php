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
        $this->value = $this->numbers[0];
        array_splice($this->numbers, 0, 1);

        foreach ($this->numbers as $number) {
            $this->value -= $number;
        }

        return $this->value;
    }

    public function multiplication(): float
    {
        $this->value = $this->numbers[0];
        array_splice($this->numbers, 0, 1);

        foreach ($this->numbers as $number) {
            $this->value *= $number;
        }

        return $this->value;
    }

    public function division(): float
    {
        $this->value = $this->numbers[0];
        array_splice($this->numbers, 0, 1);

        foreach ($this->numbers as $number) {
            $this->value /= $number;
        }

        return $this->value;
    }

    public function addNumber(float $number)
    {
        $this->numbers[] = $number;
    }
}