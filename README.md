```
 ______     __  __     ______   ______     ______     ______     ______     __         ______    
/\  __ \   /\ \/\ \   /\__  _\ /\  __ \   /\  ___\   /\  ___\   /\  __ \   /\ \       /\  ___\   
\ \  __ \  \ \ \_\ \  \/_/\ \/ \ \ \/\ \  \ \  __\   \ \ \____  \ \ \/\ \  \ \ \____  \ \  __\   
 \ \_\ \_\  \ \_____\    \ \_\  \ \_____\  \ \_____\  \ \_____\  \ \_____\  \ \_____\  \ \_____\ 
  \/_/\/_/   \/_____/     \/_/   \/_____/   \/_____/   \/_____/   \/_____/   \/_____/   \/_____/ 
                                                                                                 
```
- Installation du scope pour symfony :
```
$ Set-ExecutionPolicy RemoteSigned -scope CurrentUser
$ iwr -useb get.scoop.sh | iex
$ scoop install symfony-cli
$ symfony -v
```
- Au lancement du projet, faire  les commandes suivantes :
```
$ composer install
$ composer require fakerphp/faker
$ composer require --dev doctrine/doctrine-fixtures-bundle
$ composer require --dev orm-fixtures
```
- Créer un projet (uniquement pour les dévs de ce projets) :
```
$ symfony new [Nom du projet] --version=lts --webapp
```
- Démarrer/Arrêter le serveur :
```
$ symfony server:start
$ symfony server:stop
```
