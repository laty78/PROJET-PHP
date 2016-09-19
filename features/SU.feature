Feature: A SU registers an modo
    Display the possibilities
    Of an SU registering an modo

    Scenario: A SU registers an modo
        Given I am "SU"
        When I click on "add modo"
        And I enter an unused "username"
        And I enter an unused "email"
        Then I create a modo

    Scenario: A SU registers an modo with a used username or a used email
        Given I am "SU"
        When I click on "add modo"
        And I enter an used "username"
        And I enter an used "email"
        Then I get an error



    Scenario: A SU edit an modo existant
        Given I am "SU"
        When I click on "edit modo"
        And I enter an unsued "email"
        And I enter an unsued "username"
        And the modo exists
        Then I updated an modo

    Scenario: A SU edit a non-existant modo
        Given I am "SU"
        When I click on "edit modo"
        And I enter an unsued "email"
        And I enter an unsued "username"
        And the modo doesn't exist
        Then I get a question "This modo doesn't exist anymore, do you want to create it?"

    Scenario: A SU edit a existant modo with an unvalid username and email
        Given I am "SU"
        When I click on "edit modo"
        And I enter an used "username"
        And I enter an used "email"
        And the modo exists
        Then I get an error
        
    Scenario: A SU edit a existant modo with an unvalid username
        Given I am "SU"
        When I click on "edit modo"
        And I enter an used "username"
        And I enter an unused "email"
        And the modo exists
        Then I get an error
        
    Scenario: A SU edit a existant modo with an unvalid email
        Given I am "SU"
        When I click on "edit modo"
        And I enter an unused "username"
        And I enter an used "email"
        And the modo exists
        Then I get an error



    Scenario: A SU delete a existant modo
        Given I am "SU"
        And I click on "delete modo"
        And the modo exists
        And I get a confirmation
        When I click on "yes"
        Then the modo is deleted

    Scenario: A SU renonce to delete an exixtant modo
        Given I am "SU"
        And I click on "delete modo"
        And the modo exists
        And I get a confirmation
        When I click on "no"
        Then the modo keep on existing

    Scenario: A SU delete a non-existant modo
        Given I am "SU"
        When I click on "delete modo"
        And the modo doesn't exist
        Then I get an error