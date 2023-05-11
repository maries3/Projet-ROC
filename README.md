# Projet-ROC

Le projet ROC consiste à réaliser un système de Ramassage Optimisé et Connecté. Ce système, grâce aux conteneurs
semi-enterrés permet une simplification de la collecte des déchets, plus de tournées de collecte
systématique.

Ce projet est constituer d'une partie informatique avec un site web, d'une base de donnée, d'une liaison série ainsi que d'une partie éléctronique composer d'un module Arduino Uno et d'un capteur à ultrasons.

Les informations qui seront disponible à la fin du projet sont :
- Le taux de remplissage des conteneurs par site de conteneur
- La fréquence de remplissage des conteneurs
- La localisation des sites

Actuellement, les options disponibles sont :
- Le taux de remplissage
    - Une actualisations des données (10 secondes pour les tests effectués mais modifiable)
    - Une alerte suivant le taux de remplissage des conteneurs

Pour ce qui est des fonctionnements des différents fichiers nous avons :

- index.php : Page d'accueil du site web permettant d'accéder aux site de conteneur et au formulaire.
- index2.php : Page affichant les informations des différents site de conteneurs (Nom du site, taux de remplissage, fréquence de remplissage, localisation, alerte de niveau de remplissage)
- site.php : Formulaire permettant un ajout de site de conteneur dans la base de donnée
- merci.php : Page de remerciement qui fait suite au remplissage du formulaire
- css.css : Code permettant la mise en forme de l'ensemble du site web et de la jauge du taux de remplissage
- port.php : Code permettant la récupération d'information entre le module et la base de donnée grâce à une liaison série
- poubelle.sql : Base de donnée contenant les informations reçu par le module et traité sur le site web par la suite
- poubelle.png et poubelle2.jpg : Image servant à structurer le site web
- main.cpp : Code du module Arduino Uno (permet la récupération des données du taux de remplissage et de les convertir en pourcentage pour les envoyer à l'aide de trame sur la base de donnée)
