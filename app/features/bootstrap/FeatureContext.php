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

    public function __construct()
    {
        $this->calculator = new Calc();
    }

    /**
     * @When I add :arg1 to the calculator
     *
     * @param $arg1
     */
    public function iAddToTheCalculator($arg1)
    {
        $this->calculator->setValue($arg1);
    }

    /**
     * @When I division this value to :arg1
     *
     * @param $arg1
     */
    public function iDivisionThisValueTo($arg1)
    {
        $this->calculator->division($arg1);
    }

    /**
     * @When I addition :arg1 to this value
     *
     * @param $arg1
     */
    public function iAdditionToThisValue($arg1)
    {
        $this->calculator->addition($arg1);
    }

    /**
     * @When I subtraction the :arg1 from this value
     *
     * @param $arg1
     */
    public function iSubtractionTheFromThisValue($arg1)
    {
        $this->calculator->subtraction($arg1);
    }

    /**
     * @When I multiplication this value by :arg1
     *
     * @param $arg1
     */
    public function iMultiplicationThisValueBy($arg1)
    {
        $this->calculator->multiplication($arg1);
    }

    /**
     * @Then the overall calculator value should be :arg1
     *
     * @param $arg1
     */
    public function theOverallCalculatorValueShouldBe($arg1)
    {
        Assert::assertSame((float)$arg1, $this->calculator->getValue());
    }
}
