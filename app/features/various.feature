Feature: Various actions of numbers
  In calculator various actions of numbers
  As a user
  I need to be able to various actions of numbers

  Scenario: Division of two numbers and addition of third
    When I add 6 to the calculator
    And I division this value to 3
    Then the overall calculator value should be 2.0
    When I addition 6 to this value
    Then the overall calculator value should be 8.0
    When I subtraction the 2 from this value
    Then the overall calculator value should be 6.0
    When I multiplication this value by 3
    Then the overall calculator value should be 18.0
