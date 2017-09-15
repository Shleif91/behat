Feature: Addition of numbers
  In calculator addition of numbers
  As a user
  I need to be able to addition of numbers

  Scenario: Addition of two numbers
    When I add 6 to the calculator
    And I addition 2 to this value
    Then the overall calculator value should be 8.0

  Scenario: Addition of three numbers
    When I add 6 to the calculator
    And I addition 2 to this value
    And I addition 2 to this value
    Then the overall calculator value should be 10.0