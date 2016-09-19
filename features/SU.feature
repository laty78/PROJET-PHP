Feature: A SU registers an admin
    Display the possibilities
    Of an SU registering an admin

    Scenario: A SU registers an admin
        Given I am "SU"
        When I click on "add admin"
        And I enter a unused "username"
        And I enter an unused "email"
        Then I create a admin

    Scenario: A SU registrers an admin with a used username or a used email
        Given I am "SU"
        When I click on "add admin"
        And I enter a used "username"
        And I enter a used "email"
        Then I get an error

    Scenario: A SU edit an admin existant
        Given I am "SU"
        When I click on "edit admin"
        And I enter an unsued "email"
        And I enter an unsued "username"
        And the admin exists
        Then I updated an admin

    Scenario: A SU edit a non-existant admin
        Given I am "SU"
        When I click on "edit admin"
        And I enter an unsued "email"
        And I enter an unsued "username"
        And the admin doesn't exist
        Then I get a question "This admin doesn't exist anymore, do you want to create it?"

    Scenario: A SU edit a existant admin with an unvalid username or email
        Given I am "SU"
        When I click on "edit admin"
        And I enter a used "username"
        And I enter a used "email"
        And the admin exists
        Then I get an error

    Scenario: A SU delete a existant admin
        Given I am "SU"
        And I click on "delete admin"
        And the admin exists
        And I get a confirmation
        When I click on "yes"
        Then the admin is deleted

    Scenario: A SU renonce to delete an exixtant admin
        Given I am "SU"
        And I click on "delete admin"
        And the admin exists
        And I get a confirmation
        When I click on "no"
        Then the admin keep on existing

    Scenario: A SU delete a non-existant admin
        Given I am "SU"
        When I click on "delete admin"
        And the admin doesn't exist
        Then I get an error