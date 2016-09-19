Feature: A visitor connect

    Scenario: 3. A visitor unregistred tries to connect
        Given I am a visitor not registred
        When I click on "log in"
        And I enter a "email" or "username"
        And I enter a "password"
        Then I get an error "email adress not known in the DB"

    Scenario: 4. A registred visitor succeed to connect
        Given I am a registred visitor
        When I click on "log in"
        And I enter my "email" or "username"
        And I enter my "password"
        Then I get loged in

    Scenario: 5. A registred visitor tries to connect with the wrong email
        Given I am a registred visitor
        When I click on "log in"
        And I enter an unvalid "email" or "username"
        Then I get an error "email adress not known in the DB"

    Scenario: 6. A registred visitor tries to connect with the wrong password
        Given I am a registred visitor
        When I click on "log in"
        And I enter a valid "email" or "username"
        And I enter an unvalid "password"
        Then I get an error "Wrong password"

    Scenario: 7. A registred visitor forgot his password
        Given I am a registred visitor
        And I click on "Password Forgotten"
        And I enter a valid "email"
        Then I receive an email with a new password

    Scenario: 8. A registred visitor forgot his password and enter an unvalid emai
        Given I am a registred visitor
        When I click on "password Forgotten"
        And I enter an unvalid "email"
        Then I get an error

    Scenario: 9. A unregistred visitor forgot his password
        Given I am an unregistred visitor
        And I click on "Password Forgotten"
        And I enter a unvalid "email adress"
        Then I get an error "Email not known in the DB"