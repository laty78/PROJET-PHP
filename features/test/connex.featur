Feature: A visitor connect
    Display the possibilities
    Of a visitor trying to connect

    Scenario: A visitor succeed to connect
        Given I am "visitor"
        When I click on "log in"
        And I enter valid "email"
        And I enter valid "password"
        Then I get loged in

    Scenario: A visitor tries to connect with the wrong email
        Given I am "visitor"
        When I click on "log in"
        And I enter unvalid "email"
        Then I get an error "email adress not known in the DB"

    Scenario: A visitor tries to connect with the wrong password
        Given I am "visitor"
        When I click on "log in"
        And I enter valid "email"
        And I enter an unvalid "password"
        Then I get an error "Wrong password"

    Scenario: A visitor forgot his password
        Given I am "visitor"
        And I click on "Password Forgotten"
        And I enter a valid "email"
        Then I receive an email with a new password

    Scenario: A visitor forgot his password and enter an unvalid email
        Given I am "visitor"
        When I click on "password Forgotten"
        And I enter an unvalid "email"
        Then I get an error