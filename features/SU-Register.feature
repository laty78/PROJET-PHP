Feature: SU create a SU

    Scenario: A SU registers an SU
        Given I am "SU"
        When I click on "add SU"
        And I enter an unused "username"
        And I enter an unused "email"
        Then I create a SU

    Scenario: A SU registers an SU with a used username or a used email
        Given I am "SU"
        When I click on "add SU"
        And I enter an used "username"
        And I enter an used "email"
        Then I get an error


    
    Scenario: A SU edit an SU existant
        Given I am "SU"
        When I click on "edit SU"
        And I enter an unsued "email"
        And I enter an unsued "username"
        And the modo exists
        Then I updated an SU

    Scenario: A SU edit a non-existant SU
        Given I am "SU"
        When I click on "edit SU"
        And I enter an unsued "email"
        And I enter an unsued "username"
        And the modo doesn't exist
        Then I get a question "This SU doesn't exist anymore, do you want to create it?"

    Scenario: A SU edit a existant SU with an unvalid username and email
        Given I am "SU"
        When I click on "edit SU"
        And I enter an used "username"
        And I enter an used "email"
        And the SU exists
        Then I get an error

    Scenario: A SU edit a existant SU with an unvalid username
        Given I am "SU"
        When I click on "edit SU"
        And I enter an used "username"
        And I enter an unused "email"
        And the SU exists
        Then I get an error

    Scenario: A SU edit a existant SU with an unvalid email
        Given I am "SU"
        When I click on "edit SU"
        And I enter an unused "username"
        And I enter an used "email"
        And the SU exists
        Then I get an error



    Scenario: A SU delete a existant SU
        Given I am "SU"
        And I click on "delete SU"
        And the SU exists
        And I get a confirmation
        When I click on "yes"
        Then the SU is deleted

    Scenario: A SU renonce to delete an exixtant SU
        Given I am "SU"
        And I click on "delete SU"
        And the SU exists
        And I get a confirmation
        When I click on "no"
        Then the SU keep on existing

    Scenario: A SU delete a non-existant SU
        Given I am "SU"
        When I click on "delete SU"
        And the SU doesn't exist
        Then I get an error



    Scenario: A SU delete its count
        Given I am "SU"
        When I click on "delete SU count"
        And the SU exists
        Then I get an error message "You can't delete your count"
        
     