    Feature: modo create a post
    
        Scenario: A modo entered a valid block
            Given I am an "modo"
            When I click on the button "Create a post"
            And I type a "title" valid
            And I type a "media" valid
            And I type a "type de media" valid
            And I type a "format" valid
            And I click on "Send"
            Then A new block is created in the BDD
            And Back to Home
            And my new block is present
        
        Scenario: A modo entered an invalid block
            Given I am an "modo"
            When I click on the button "Create a post"
            And I type "any field"
            And I type a "title" invalid
            And I type a "media" invalid
            And I type a "type of media" invalid
            And I type a "format" invalid
            And Je click on "Send"
            Then The block is not created in the BDD
            And We stay on the same page
            And An error message is displayed

