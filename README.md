# projetGarage
projet étudiant sur le thème garage





# deploiement
 inscription sur alwaysdata

 dans config avancée ajout directive:
    RewriteEngine On
RewriteRule ^/[a-zA-z0-9]+[/]?$ /index.html [QSA,L]

transfert des fichiers via FTP et FileZilla

https://ecfgarageedouardmeyer.alwaysdata.net/ 

Automatisation du déploiement via github
paramètrage github, extension ftp deploy

point à date du dépôt:
à la date du dépôt de l'ECF, il manque encore beaucoup d'éléments qui sont en développement:
    les bases de données sont crées mais pas encore utilisées.
    l'insertion des horaires de manière dynamique en php avec appel de la base de données ecfgarage table timetable
    la page des vehicules d'occasion: creation en php des "cartes" des véhicules en utilisant un template
    creation des filtres qui prennent les valeurs min et max présentent dans bdd pour prix, km et date de sortie. ainsi que la liste des marques (si marque pas encore présente, ajouter checkbox)
    les éléments js et php de la page de connexion et l'affichage des sections qui correspondent au profil.
    création des formulaires pour alimenter les base de données pour l'admin et les employés.