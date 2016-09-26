Feature: A moderator registers a block
#
#    Scenario: A moderator creates a block
#        Given I am "moderator"
#        When I click on "create block"
#        And I enter a valid "title"
#        And I enter a valid "media"
#        And I enter a valid "format"
#        Then I create a block
#        
#    Scenario: A moderator tries to create a block with an unvalid media
#        Given I am "moderator"
#        When I click on "create block"
#        And I enter a valid "title"
#        And I enter a unvalid "media"
#        And I enter a valid "format"
#        Then I get an error "Unvalid media"
#        
#    Scenario: A moderator tries to create a block with an unvalid title
#        Given I am "moderator"
#        When I click on "create block"
#        And I enter a unvalid "title"
#        And I enter a valid "media"
#        And I enter a valid "format"
#        Then I get an error "Unvalid title"
#        
#    Scenario: A modeartor tries to create a block with an unvalid format
#        Given I am "moderator"
#        When I click on "create block"
#        And I enter a valid "title"
#        And I enter a valid "media"
#        And I enter a unvalid "format"
#        Then I get an error "Unvalid format"
#        
#    Scenario: A moderator tries to create a block with an unvalid title and media
#        Given I am "moderator"
#        When I click on "create block"
#        And I enter a unvalid "title"
#        And I enter a unvalid "media"
#        And I enter a valid "format"
#        Then I get an error "Unvalid title"
#        
#    Scenario: A moderator tries to create a block with an unvalid title and format
#        Given I am "moderator"
#        When I click on "create block"
#        And I enter a unvalid "title"
#        And I enter a valid "media"
#        And I enter a unvalid "format"
#        Then I get an error "Unvalid title"
#        
#    Scenario: A moderator tries to create a block with an unvalid media and format
#        Given I am "moderator"
#        When I click on "create block"
#        And I enter a valid "title"
#        And I enter a unvalid "media"
#        And I enter a unvalid "format"
#        Then I get an error "Unvalid media"
#        
#    Scenario: A moderator tries to create a block with an unvalid title, media and format
#        Given I am "moderator"
#        When I click on "create block"
#        And I enter a unvalid "title"
#        And I enter a unvalid "media"
#        And I enter a unvalid "format"
#        Then I get an error "Unvalid title"
#        
#
#
#
#    Scenario: A moderator updates an exixting block
#        Given I am  "moderator"
#        When I click on "update block"
#        And I enter a valid "title"
#        And I enter a valid "media"
#        And I enter a valid "format"
#        And the block exists
#        Then I update a block
#        
#    Scenario: A moderator updates an exixting block with an unvalid title
#        Given I am  "moderator"
#        When I click on "update block"
#        And I enter a unvalid "title"
#        And I enter a valid "media"
#        And I enter a valid "format"
#        And the block exists
#        Then I get an error
#        
#    Scenario: A moderator updates an exixting block with an unvalid media
#        Given I am  "moderator"
#        When I click on "update block"
#        And I enter a valid "title"
#        And I enter a unvalid "media"
#        And I enter a valid "format"
#        And the block exists
#        Then I get an error
#        
#    Scenario: A moderator updates an exixting block with an unvalid format
#        Given I am  "moderator"
#        When I click on "update block"
#        And I enter a valid "title"
#        And I enter a valid "media"
#        And I enter a unvalid "format"
#        And the block exists
#        Then I get an error
#        
#    Scenario: A moderator updates an exixting block with an unvalid title and media
#        Given I am  "moderator"
#        When I click on "update block"
#        And I enter a unvalid "title"
#        And I enter a unvalid "media"
#        And I enter a valid "format"
#        And the block exists
#        Then I get an error
#        
#    Scenario: A moderator updates an exixting block with an unvalid title and format
#        Given I am  "moderator"
#        When I click on "update block"
#        And I enter a unvalid "title"
#        And I enter a valid "media"
#        And I enter a unvalid "format"
#        And the block exists
#        Then I get an error
#        
#    Scenario: A moderator updates an exixting block with an unvalid media and format
#        Given I am  "moderator"
#        When I click on "update block"
#        And I enter a valid "title"
#        And I enter a unvalid "media"
#        And I enter a unvalid "format"
#        And the block exists
#        Then I get an error
#        
#    Scenario: A moderator updates an exixting block with an unvalid title, media and format
#        Given I am  "moderator"
#        When I click on "update block"
#        And I enter a unvalid "title"
#        And I enter a unvalid "media"
#        And I enter a unvalid "format"
#        And the block exists
#        Then I get an error
#        
#    Scenario: A moderator updates an non-exixting block
#        Given I am  "moderator"
#        When I click on "update block"
#        And I enter a valid "title"
#        And I enter a valid "media"
#        And I enter a valid "format"
#        And the block doesn't exist
#        Then I get a question "This block doesn't exit anymore, do you want to create it?"
#        
#        
#    Scenario: A moderator deletes an existing block
#        Given I am "moderator"
#        And I click on "delete block"
#        And the block exists
#        Then I deleted the block
#        
#    Scenario: A moderator deletes a non-existing block
#        Given I am "moderator"
#        And I click on "delete block"
#        And the block doesn't exist
#        Then I get an error