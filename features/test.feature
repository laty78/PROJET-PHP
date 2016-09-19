  Feature: Un admin créer un post

Scenario: Un admin créer un post pour envoyer une image de petite taille
  Given I am an "admin"
  When Je saisi "Nom de l'image" dans le champ "title"
    And Je saisi "url de l'image" dans le champ "media"
    And Je saisi "image" dans le champ "type de media"
    And Je saisi "1" dans le champ "format"
    And Je clique sur "Envoyer"
  Then Un nouveau post est créé dans la BDD
    And Retour à l'accueil
    And Mon nouveau post est présent