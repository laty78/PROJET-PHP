Feature: A visitor visit the app

    Scenario: a visitor clicks on a block
      Given I am a visitor
      When I click on a block
      Then The block displays on the whole page

