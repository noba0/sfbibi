*** Installation de Symfony ***

1. ***Installer symfony CLI sur notre environnement de travail :***
Pour macOS  avec Homebrew ->brew install symfony-cli/tap/symfony-cli
Pour windows avec scoop ->scoop install symfony-cli

2. ***Creation de l’application symfony : ***
->symfony new my_project_directory --version="7.0.*" --webapp

3. ***Création de la base donnée :**
Copier .env en .env.local puis modifier les variables souhaitées dans ce dernier
Pour créer la base de donnée :
->symfony console doctrine:database:create

4. ***Création des entités Books et Users**
->symfony make:entity Books et symfony make:user pour avoir un package user pour complet

5. ***Création des cruds Books et users (propriétés à determiner selon besoin)**
 ->symfony make:crud
Pour effectuer les migration :
->symfony console make:migration
Ensuite migrate :
->symfony console doctrine:migrations:migrate


6. ***Création des controllers Books et Users**
->symfony make:controller

7. ***Création des controllers pour l’authentification des users***
->symfony make:Auth (à personnaliser selon vos besoins)

8. ***Pour ajouter les fausses données dans la base de donnée* via des fixtures et faker***

**Fixtures** : commencer d’abord par l'installation du bundle avec la cmmd
->composer require --dev orm-fixtures,

puis par l’ajout de classes ->symfony console make:fixtures et**

enfin charger vos fausses données dans la base de donnée ->symfony console doctrine:fixtures:load ou **

avec la cmmd ->symfony console doctrine:fixtures:load --append
si vous ne voulez pas écraser vos données charger plus tot **

9. ***Créer un HomeController pour afficher les livres sous forme de cards avec le titre et l'image***
symfony console make:controller HomeController (ajouter une méthode "index" à ce contrôleur pour gérer les requêtes)

10. ***Pour ajouter un mailer (Optionnel)***
Vous devrez installer un bundle mail -> composer require symfony/mailer
Installation d'un mail catcher : mailcatcher ou mailhog ou maildev
Renseignez le MAILER_DSN dans .env.local (MAILER_DSN=smtp://localhost:1025
)

***Lire la Doc pour plus de précision :***
 <https://symfony.com/doc/current/mailer.html#email-addresses>
