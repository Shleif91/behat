<?php

namespace Calculator;

class Memory
{
    private $value = 0;

    public function addToMemory(float $num): void
    {
        $this->value += $num;
    }

    public function subtractFromMemory(float $num): void
    {
        $this->value += $num;
    }

    public function getMemoryValue(): float
    {
        return $this->value;
    }

    public function clearMemory(): void
    {
        $this->value = 0;
    }
}