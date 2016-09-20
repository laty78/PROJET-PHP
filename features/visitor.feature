  Feature: A visitor visit the app

Scenario: a visitor clicks on a block
  Given I am a "visitor"
    And I click on a "block"
  Then The block displays on the whole page

Scenario: a visitor filter via media type
  Given I am a "vistor"
  When I click on "filter"
    And I choose "media type: video"
  Then I get video blocks