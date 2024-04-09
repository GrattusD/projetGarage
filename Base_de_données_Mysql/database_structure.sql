/*création de la table des employés*/
CREATE TABLE employees (
  Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  prenom varchar(255) NOT NULL,
  nomfamille varchar(255) NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
) 
INSERT INTO employees (prenom, nomfamille, username, password) VALUES 
('Martin','LEGRAND','m.Legrand','B@rde-Magik23'),
('Fernand','BICHON','f.Bichon','ProDUg@rage55');

/*création de la table des horaires*/
CREATE TABLE timetable (
  Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Jour varchar(255) NOT NULL,
  okam tinyint(1) NOT NULL,
  opentimeam time DEFAULT NULL,
  closetimeam time DEFAULT NULL,
  okpm tinyint(1) NOT NULL,
  opentimepm time DEFAULT NULL,
  closetimepm time DEFAULT NULL,
  PRIMARY KEY (Id)
)
INSERT INTO timetable (Jour, okam, opentimeam, closetimeam, okpm, opentimepm, closetimepm) VALUES
('Lundi', TRUE, '08:45:00', '12:00:00', TRUE, '14:00:00', '18:00:00'),
('Mardi', TRUE, '08:45:00', '12:00:00', TRUE, '14:00:00', '18:00:00'),
('Mercredi', TRUE, '08:45:00', '12:00:00', TRUE, '14:00:00', '18:00:00'),
('Jeudi', TRUE, '08:45:00', '12:00:00', TRUE, '14:00:00', '18:00:00'),
('Vendredi', TRUE, '08:45:00', '12:00:00', TRUE, '14:00:00', '18:00:00'),
('Samedi', TRUE, '08:45:00', '12:00:00', FALSE, NULL, NULL),
('Dimanche', FALSE, NULL, NULL, FALSE, NULL, NULL);


/*création de la table des véhicules d'occasion*/
CREATE TABLE vehicules (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  marque varchar(255) DEFAULT NULL,
  modele varchar(255) DEFAULT NULL,
  prix int(11) DEFAULT NULL,
  kilometrage int(11) DEFAULT NULL,
  date_mise_circulation year(4) DEFAULT NULL,
  baisse_prix tinyint(1) DEFAULT NULL,
)
INSERT INTO vehicules (marque, modele, prix, kilometrage, date_mise_circulation, baisse_prix) VALUES 
 ('Toyota','Yaris',15000,25000,2018,1),
 ('Volkswagen','Golf',18000,35000,2017,0),
 ('Renault','Clio',12000,20000,2019,0),
 ('Peugeot','208',13000,18000,2018,0),
 ('Ford','Fiesta',11000,22000,2016,0),
 ('Audi','A3',25000,40000,2017,0),
 ('BMW','3 Series',28000,45000,2016,0),
 ('Mercedes-Benz','C-Class',30000,50000,2015,1),
 ('Nissan','Qashqai',20000,30000,2018,0),
 ('Hyundai','i30',14000,22000,2017,0),
 ('Kia','Sportage',22000,40000,2016,0),
 ('Volvo','XC60',32000,55000,2015,0),
 ('Citroen','C3',12500,18000,2019,0),
 ('Seat','Ibiza',11500,20000,2018,0),
 ('Skoda','Octavia',16000,30000,2017,0),
 ('Mazda','3',14000,25000,2018,0),
 ('Fiat','500',10000,15000,2017,0),
 ('Jeep','Renegade',18000,35000,2016,0),
 ('Mini','Cooper',20000,30000,2015,0);


/*création de la table des services*/

create table services(
  id int(11) AUTO_INCREMENT not NULL PRIMARY KEY,
  nom varchar(255) DEFAULT not null,
  content text(255) not null,
  price int(11),
)