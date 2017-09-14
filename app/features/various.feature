Feature: Various actions of numbers
  In calculator various actions of numbers
  As a user
  I need to be able to various actions of numbers

  Scenario: Division of two numbers and addition of third
    When I add the 6 to the calculator
    And I add the 3 to the calculator
    And choose the method "division"
    Then the overall calculator value should be 2.0
    When I add the 6 to the calculator
    And choose the method "addition"
    Then the overall calculator value should be 8.0