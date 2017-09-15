Feature: Division of numbers
  In calculator division of numbers
  As a user
  I need to be able to division of numbers

  Scenario: Division of two numbers
    When I add 6 to the calculator
    And I division this value to 3
    Then the overall calculator value should be 2.0

  Scenario: Division of three numbers
    When I add 9 to the calculator
    And I division this value to 3
    And I division this value to 3
    Then the overall calculator value should be 1.0