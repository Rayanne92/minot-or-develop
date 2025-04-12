Windows DL :
```
Set-ExecutionPolicy RemoteSigned -Scope CurrentUser

Yes

irm get.scoop.sh | iex

scoop install php

scoop install composer

scoop install symfony-cli

C:\Users\Rayanne\Documents\GitHub

```


```
php –v

composer –v

set prompt= $G

composer create-project symfony/skeleton:"7.0.*" minot-or

cd minot-or

composer require webapp

cd minot-or

php -S localhost:8000 -t public -d display_errors=1

http://localhost:8000

composer require symfony/maker-bundle --dev

php bin/console make:controller PageController
```

- Controller : minot-or/src/Controller
- Page : minot-or/templates

Créer une page et y accéder
```
php bin/console make:controller NomDeVotrePage
{{ path('about') }}
```
