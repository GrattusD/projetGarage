# projetGarage
projet étudiant sur le thème garage


# historique du deploiement, deploiement
 inscription sur alwaysdata

 dans config avancée ajout directive:
    RewriteEngine On
RewriteRule ^/[a-zA-z0-9]+[/]?$ /index.html [QSA,L]

transfert des fichiers via FTP et FileZilla

https://ecfgarageedouardmeyer.alwaysdata.net/ 

Automatisation du déploiement via github
paramètrage github, extension ftp deploy


# Guide pour deploiement local
utilisation de Xampp pour
    Apache comme serveur web (	Apache/2.4.58 (Win64))
    MariaDB comme SGBD (10.4.32-MariaDB)
    language de programmation côté serveur : PHP 8.2.12
utilisation du framework Bootstrap 5.3.3

Pour l'installation:
cloner le dépôt avec la fonction git clone https://github.com/GrattusD/projetGarage.git
configurer l'environnement
importer la base de donnée du dossier Base de données Mysql (créer une nouvelle base de données sur votre serveur de base de données (ici ecfgarageedouardmeyer et importer le fichier fourni avec mysql -u root -p ecfgarage < database_structure.sql))
démarrer le serveur web local
accéder au site

point à date du dépôt:
à la date du dépôt de l'ECF, il manque encore beaucoup d'éléments qui sont en développement:
    la page des vehicules d'occasio: creation en php des "cartes" des véhicules 
    creation des filtres qui prennent les valeurs min et max présentent dans bdd pour prix, km et date de sortie. ainsi que la liste des marques (si marque pas encore présente, ajouter checkbox)
    les éléments js et php de la page de connexion et l'affichage des sections qui correspondent au profil.
    création des formulaires pour alimenter les base de données pour l'admin et les employés.