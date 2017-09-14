<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\Assert;
use Calculator\Calc;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $numbers = [];

    private $calculator;

    public function __construct()
    {
        $this->calculator = new Calc();
    }

    /**
     * @Given there is a :arg1, which value :arg2
     *
     * @param $arg1
     * @param $arg2
     */
    public function thereIsAWhichValue($arg1, $arg2)
    {
        $this->numbers[$arg1] = $arg2;
    }

    /**
     * @When I add the :arg1 to the calculator
     *
     * @param $arg1
     */
    public function iAddTheToTheCalculator($arg1)
    {
        $this->calculator->addNumber($this->numbers[$arg1]);
    }

    /**
     * @Then the overall calculator sum should be :arg1
     *
     * @param $arg1
     */
    public function theOverallCalculatorSumShouldBe($arg1)
    {
        Assert::assertSame((float)$arg1, $this->calculator->addition());
    }
}
