<?php

namespace spec\Calculator;

use Calculator\Memory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MemorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Memory::class);
    }

    function it_return_number()
    {
        $this->getMemoryValue()->shouldBe(.0);
    }

    function it_add_number()
    {
        $this->addToMemory(1.0);
        $this->getMemoryValue()->shouldBe(1.0);
    }

    function it_subtract_number()
    {
        $this->addToMemory(2.0);
        $this->subtractFromMemory(1.0);
        $this->getMemoryValue()->shouldBe(1.0);
    }

    function it_clears()
    {
        $this->addToMemory(1.0);
        $this->clearMemory();
        $this->getMemoryValue()->shouldBe(.0);
    }
}
