<?php
declare(strict_types=1);

namespace Calculator;

class Calc
{
    private $value = 0;

    private $memory;

    public function __construct(Memory $memory)
    {
        $this->memory = $memory;
    }

    public function getValue(): float
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

    public function addToMemory(): void
    {
        $this->memory->addToMemory($this->value);
    }

    public function subtractFromMemory(): void
    {
        $this->memory->subtractFromMemory($this->value);
    }

    public function getMemoryValue(): float
    {
        return $this->memory->getMemoryValue();
    }

    public function clearMemory(): void
    {
        $this->memory->clearMemory();
    }
}