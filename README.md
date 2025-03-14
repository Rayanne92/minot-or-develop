```
php –v
composer –v
cd minot-or
set prompt= $G
composer create-project symfony/website-skeleton minot-or
```

Accédez au répertoire **"blog"**, puis exécutez la commande suivante pour démarrer le serveur :
```
php -S localhost:8088 -t public
```

Ensuite, ouvrez votre navigateur et entrez l'adresse suivante pour accéder à l'application web :
```
http://localhost:8088/
```
