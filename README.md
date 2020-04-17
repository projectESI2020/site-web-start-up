# Projet de fin de formation

### Site vitrine de l'entreprise B&DCONCEPT en Symfony 4

Ce site contient un formulaire de contact qui utilise Gmail
Ces mails sont redirigés vers le site interne Sharepoint de l'entreprise
Google Analytics est intégré sur le site les résultats s'affiche aussi sur le Sharepoint

__Symfony version__: 4  
__Symfony skeleton__: BD_CONCEPT  
__Moteur de vue__: Twig  
__Framework CSS__: Bootstrap 4 (Bootstrap avec CDN)

## Installation

``` bash
# Installer les dépendances
composer install

# DSN de Swift Mailer à modifier dans le fichier .env
MAILER_URL=smtp://<address>:<port>?encryption=tls&auth_mode=login&username=<your_username>&password=<your_password>

# Démarrer le serveur :
php bin/console server:start
```
