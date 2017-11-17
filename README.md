# Tourbillon Framework

## Introduction

Tourbillon Framework est un framework PHP comme il en existe déjà un bon paquet.

## Installation

executer la commande suivante afin de créer le projet :

```
composer create-project tournikoti/tourbillon-framework
```

## Configuration

Pour configurer votre application, dupliquez le fichier `app/config/parameters.example.neon` et renommez le en `parameters.neon`.

Vous pouvez modifier le contenu de ce fichier pour la connexion à votre base de données.

La configuration complète de votre application se fera dans le fichier `app/config/config.neon`.

## Le Router

Le router contient toutes les routes de votre application. Une route est un ensemble URL, controller et methode à executer.

Vos routes sont déclarées dans le fichier `app/config/routing.neon`.

Voici un exemple :

```yml
routing:
    home:
        url: 'users'
        controller: src\Controller\User
        action: list
```

Ici, pour une url comme `http://localhost/users`, la méthode `listAction` du controller `UserController` sera executé.

Voici un exemple avec un paramètre :

```yml
routing:
    home:
        url: 'users/(:user)'
        controller: src\Controller\Index
        action: index
        params:
            user: \d
```

Ici, l'URL contient un parametre `user`. il sera possible de récuperer cette valeur en paramètre de la méthode du controller :

```php
<?php

public function indexAction($user)
{
    return $this->render('index.tpl');
}
```

Ici, pour une URL comme `http://localhost/users/59`, la variable `$user` sera égale à 59.