Feature: A moderator change the theme

    Scenario: A moderator changes the theme color in black
        Given I am "moderator"
        When I click on "theme"
        And I enter "black"
        Then I change the theme in black
        
    Scenario: A moderator changes the theme color in white
        Given I am "moderator"
        When I click on "theme"
        And I enter "white"
        Then I change the theme in white
        
    Scenario: A moderator changes the theme with a valid image
        Given I am "moderator"
        When I click on "theme"
        And I enter a valid "image"
        Then I change the theme with this image
        
    Scenario: A moderator changes the theme with an unvalid image
        Given I am "moderator"
        When I click on "theme"
        And I enter an unvalid "image"
        Then I get an error