Feature: Addition of numbers
  In calculator addition of numbers
  As a user
  I need to be able to addition of numbers

  Scenario: Addition of two numbers
    When I add the 5 to the calculator
    And I add the 3 to the calculator
    And choose the method "addition"
    Then the overall calculator value should be 8.0

  Scenario: Addition of three numbers
    When I add the 5 to the calculator
    And I add the 3 to the calculator
    And I add the 2 to the calculator
    And choose the method "addition"
    Then the overall calculator value should be 10.0