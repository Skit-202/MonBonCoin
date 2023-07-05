# MVC

L'architecture MVC est une architecture logicielle destinée aux interfaces graphiques lancée en 1978 et très populaire pour les applications web. Elle est composée de trois types de composants : les modèles, les vues et les contrôleurs.

## Modèle
C'est la représentation des données manipulées par l'application. Il contient les données et les méthodes pour les manipuler. Il est indépendant de l'interface graphique.

## Vue
C'est l'interface graphique de l'application. Elle affiche les données du modèle et permet leur modification. Elle est indépendante du modèle.

## Contrôleur
C'est l'intermédiaire entre le modèle et la vue. Il reçoit les actions de l'utilisateur sur la vue et les traite en conséquence. Il met à jour le modèle et la vue en fonction des actions de l'utilisateur.

## Structure d'un projet MVC
- MonProjet/
    - controller/
        - HomeController.php
        - UserController.php
    - model/
        - database.php
        - Model.php
        - UserManager.php
    - view/
        - View.php
        - home.php
        - login.php
    -public/
        - css/
        - js/
        - img/
        - index.php

## Avantages

- Séparation des responsabilités
- Réutilisation du code
- Facilité de maintenance
- Facilité de test
- Travail en équipe

## Inconvénients

- Complexité
- Beaucoup de fichiers
- Difficulté à comprendre le fonctionnement(au début)