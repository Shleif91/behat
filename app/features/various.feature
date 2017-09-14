Feature: Various actions of numbers
  In calculator various actions of numbers
  As a user
  I need to be able to various actions of numbers

  Scenario: Division of two numbers and addition of third
    When I add 6 to the calculator
    And I division this value to 3
    When I addition 6 to this value
    Then the overall calculator value should be 8.0

  Scenario: Addition of two numbers and multiplication of third
    When I add 5 to the calculator
    And I addition 2 to this value
    And I multiplication this value by 3
    Then the overall calculator value should be 21.0
