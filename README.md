# projetGarage
projet étudiant sur le thème garage

# Guide pour deploiement local
installation de Xampp pour
    Apache comme serveur web (	Apache/2.4.58 (Win64))
    MariaDB comme SGBD (10.4.32-MariaDB)
    language de programmation côté serveur : PHP 8.2.12
utilisation du framework Bootstrap 5.3.3 (inclus avec CDN)

Pour l'installation en local:
    -installation des fichiers du site avec git
reprérer le dossier cible dans xampp (par défaut htdocs)
en ligne de commande:
cloner le dépôt avec la fonction git clone https://github.com/GrattusD/projetGarage.git

configurer l'environnement
    -installation de la base de données
démarrer le control panel de xampp
lancer Apache et Mysql
importer la base de donnée du dossier Base de données Mysql (créer une nouvelle base de données sur votre serveur de base de données (ici ecfgarageedouardmeyer et importer le fichier fourni avec mysql -u root -p ecfgarage < database_structure.sql))

# historique du deploiement, deploiement
 inscription sur alwaysdata

 dans config avancée ajout directive:
    RewriteEngine On
RewriteRule ^/[a-zA-z0-9]+[/]?$ /index.html [QSA,L]

transfert des fichiers via FTP et FileZilla
https://ecfgarageedouardmeyer.alwaysdata.net/ 

Automatisation du déploiement via github
paramètrage github, extension ftp deploy

# point à date du dépôt:
il manque encore beaucoup d'éléments qui sont en développement:
    -récupération des données des filtres de la page occasion
    -automatisation de la création des cards des véhicules d'occasion (récupération des objets véhicules et création des cards)
    -vérification des identifiants de connexion et mdp
    -envoi des informations vers la base de données : new Employee, new offer, new Timetable, new commentary, new Véhicule.
    -récupération et affichage des services