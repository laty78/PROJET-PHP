  Feature: Un admin créer un post

Scenario:tentative de connexion
  Given I am an "user"
  When Je saisi "chat" dans le champ "pseudo"
  When Je saisi "felix" dans le champ "psw"
  Then Je me connect à mon compte
    And Retour à l'accueil

Scenario: Un admin créer un post pour envoyer une image de petite taille
  Given I am an "User"
  When je créé un bloc
    And Je saisi "Nom de l'image" dans le champ "title"
    And Je saisi "url de l'image" dans le champ "media"
    And Je saisi "1" dans le champ "format"
    And Je clique sur "Envoyer"
  Then Un nouveau post est créé dans la BDD
    And Retour à l'accueil
    And Mon nouveau post est présent

Scenario: Un admin créer un post pour envoyer une video
  Given I am an "User"
  When je créé un bloc
    And Je saisi "Nom de la video" dans le champ "title"
    And Je saisi "url de la video" dans le champ "media"
    And Je saisi "1" dans le champ "format"
    And Je clique sur "Envoyer"
  Then Un nouveau post est créé dans la BDD
    And Retour à l'accueil
    And Mon nouveau post est présent

Scenario: Un admin créer un post pour envoyer un audio
  Given I am an "User"
  When je créé un bloc
    And Je saisi "Nom de l'audio" dans le champ "title"
    And Je saisi "url de l'audio" dans le champ "media"
    And Je saisi "1" dans le champ "format"
    And Je clique sur "Envoyer"
  Then Un nouveau post est créé dans la BDD
    And Retour à l'accueil
    And Mon nouveau post est présent

Scenario: Un admin créer un post pour envoyer une image et un audio
  Given I am an "User"
  When je créé un bloc
    And Je saisi "Nom de l'évènement" dans le champ "title"
    And Je saisi "url de l'image et url de l'audio" dans le champ "media"
    And Je saisi "1" dans le champ "format"
    And Je clique sur "Envoyer"
  Then Un nouveau post est créé dans la BDD
    And Retour à l'accueil
    And Mon nouveau post est présent
