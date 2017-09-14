Feature: Addition of numbers with using Memory
  In calculator addition of numbers with using Memory
  As a user
  I need to be able to addition of numbers with using Memory

  Scenario: Addition of two numbers and add result in memory
    When I add 6 to the calculator
    And I addition 2 to this value
    And I add calculator value in memory
    Then the overall calculator value should be 8.0
    And the memory value should be 8.0

  Scenario: Add number in memory, addition second number and subtract it from memory value
    When I add 6 to the calculator
    And I add calculator value in memory
    And I addition 2 to this value
    And I subtract calculator value from memory
    Then the overall calculator value should be 8.0
    And the memory value should be -2.0

  Scenario: Add number in memory and clear memory
    When I add 6 to the calculator
    And I add calculator value in memory
    And I clear memory
    Then the memory value should be .0