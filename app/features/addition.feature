Feature: Addition of numbers
  In calculator addition of numbers
  As a user
  I need to be able to addition of numbers

  Scenario: Addition of two numbers
    Given there is a "Number 1", which value 5
    And there is a "Number 2", which value 3
    When I add the "Number 1" to the calculator
    And I add the "Number 2" to the calculator
    Then the overall calculator sum should be 8.0

  Scenario: Addition of three numbers
    Given there is a "Number 1", which value 5
    And there is a "Number 2", which value 3
    And there is a "Number 3", which value 2
    When I add the "Number 1" to the calculator
    And I add the "Number 2" to the calculator
    And I add the "Number 3" to the calculator
    Then the overall calculator sum should be 10.0