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
    And Je saisi "url de l'image" dans le champ "media_img"
    And Je saisi "1" dans le champ "format"
    And Je clique sur "Envoyer"
  Then Un nouveau post est créé dans la BDD
    And Retour à l'accueil
    And Mon nouveau post est présent