  Feature: Admin create a post

Scenario: Un admin saisi un bloc valide
  Given I am an "admin"
  When I click on the button "Create a post"
    And Je saisi un "title" valide
    And Je saisi un "media" valide
    And Je saisi un "type de media" valide
    And Je saisi un "format" valide
    And Je clique sur "Envoyer"
  Then Un nouveau bloc est créé dans la BDD
    And Retour à l'accueil
    And mon nouveau bloc est présent

Scenario: Un admin saisi un bloc non valide
  Given I am an "admin"
  When I click on the button "Create a post"
    And Je saisi "tous les champs"
    And Je saisi un "title" non valide
    And Je saisi un "media" non valide
    And Je saisi un "type de media" non valide
    And Je saisi un "format" non valide
    And Je clique sur "Envoyer"
  Then Le bloc n'est pas créé dans la BDD
    And On reste sur la même page
    And Un message erreur est affiché