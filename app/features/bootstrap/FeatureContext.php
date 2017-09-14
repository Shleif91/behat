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
    private $calculator;

    private $method;

    public function __construct()
    {
        $this->calculator = new Calc();
    }

    /**
     * @When I add the :arg1 to the calculator
     *
     * @param $arg1
     */
    public function iAddTheToTheCalculator($arg1)
    {
        $this->calculator->addNumber($arg1);
    }

    /**
     * @When choose the method :arg1
     */
    public function chooseTheMethod($arg1)
    {
       $this->method = $arg1;
    }

    /**
     * @Then the overall calculator value should be :arg1
     *
     * @param $arg1
     */
    public function theOverallCalculatorValueShouldBe($arg1)
    {
        $method = $this->method;
        Assert::assertSame((float)$arg1, $this->calculator->$method());
    }
}
