Feature: A visitor connect
    Display the possibilities
    Of a visitor trying to connect

    Scenario: A visitor succeed to connect
        Given I am "visitor"
        When I enter a valid "email"
        And I enter a valid "password"
        Then I get loged in

    Scenario: A visitor tries to connect with the wrong email
        Given I am "visitor"
        When I enter an unvalid "email"
        And I enter a valid "password"
        Then I get an error

    Scenario: A visitor tries to connect with the wrong password
        Given I am "visitor"
        When I enter a valid "email"
        And I enter an unvalid "password"
        Then I get an error
    
    Scenario: A visitor tries to connect with the wrong email and password
        Given I am "visitor"
        When I enter an unvalid "email"
        And I enter an unvalid "password"
        Then I get an error



    Scenario: A visitor forgot his password
        Given I am "visitor"
        And I enter a valid "email"
        Then I receive an email with a new password

    Scenario: A visitor forgot his password and enter an unvalid email
        Given I am "visitor"
        When I enter an unvalid "email"
        Then I get an error 