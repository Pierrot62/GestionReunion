DROP DATABASE IF EXISTS GestionReunions ;

CREATE DATABASE IF NOT EXISTS `GestionReunions` DEFAULT CHARACTER SET utf8 ;

USE `GestionReunions`;


--
-- Table structure for table `Organisations`
--
CREATE TABLE Organisations(
   IdOrganisation INT AUTO_INCREMENT PRIMARY KEY,
   nomOrg VARCHAR(100) ,
   adresseOrg VARCHAR(200) ,
   villeOrg VARCHAR(100) ,
   paysOrg VARCHAR(100) ,
   codePostalOrg VARCHAR(10) ,
   horaireDebutOrg VARCHAR(10) ,
   HoraireFinOrg VARCHAR(10) ,
   numTelOrg VARCHAR(10) ,
   emailOrg VARCHAR(200)
)ENGINE=InnoDB;

--
-- Table structure for table `RolesApps`
--
CREATE TABLE RolesApp(
   IdRoleApp INT PRIMARY KEY,
   libelleRoleApp VARCHAR(20) 
)ENGINE=InnoDB;

--
-- Table structure for table `Reunions`
--
CREATE TABLE Reunions(
   IdReunion INT AUTO_INCREMENT PRIMARY KEY,
   typeReunion INT,
   lieuReunion VARCHAR(255) ,
   titreReunion VARCHAR(255)
)ENGINE=InnoDB;

--
-- Table structure for table `RolesReunions`
--
CREATE TABLE RolesReunions(
   IdRoleReunion INT AUTO_INCREMENT PRIMARY KEY,
   libelleRoleReunion VARCHAR(20)
)ENGINE=InnoDB;

--
-- Table structure for table `FichiersReunions`
--
CREATE TABLE FichiersReunions(
   IdFichierReunion INT AUTO_INCREMENT PRIMARY KEY,
   nomFichierReunion VARCHAR(200) ,
   hyperlienFichierReunion TEXT,
   IdReunion INT NOT NULL
)ENGINE=InnoDB;

--
-- Table structure for table `Sondages`
--
CREATE TABLE Sondages(
   IdSondage INT AUTO_INCREMENT PRIMARY KEY,
   nomSondage VARCHAR(255) ,
   propositonSondage TEXT,
   resultatSondage TEXT,
   IdReunion INT NOT NULL

)ENGINE=InnoDB;

--
-- Table structure for table `Users`
--
CREATE TABLE Services(
   IdService INT AUTO_INCREMENT PRIMARY KEY,
   nomService VARCHAR(100) ,
   IdOrganisation INT NOT NULL
)ENGINE=InnoDB;

--
-- Table structure for table `SallesReunion`
--
CREATE TABLE SallesReunion(
   IdSalle INT AUTO_INCREMENT PRIMARY KEY,
   NumSalle INT,
   IdOrganisation INT NOT NULL
)ENGINE=InnoDB;

--
-- Table structure for table `Users`
--
CREATE TABLE Users(
   IdUser INT AUTO_INCREMENT PRIMARY KEY,
   nomUser VARCHAR(100) ,
   prenomUser VARCHAR(100) ,
   DDNUser DATE,
   emailUser VARCHAR(200) ,
   motDePasseUser VARCHAR(100) ,
   IdRoleApp INT NOT NULL
)ENGINE=InnoDB;

--
-- Table structure for table `Sujets`
--
CREATE TABLE Sujets(
   IdSujet INT AUTO_INCREMENT PRIMARY KEY,
   nomSujet VARCHAR(200) ,
   dureeSujet TIME,
   IdUser INT NOT NULL,
   IdReunion INT NOT NULL

)ENGINE=InnoDB;

--
-- Table structure for table `Actions`
--
CREATE TABLE Actions(
   IdAction INT AUTO_INCREMENT PRIMARY KEY,
   nomAction TEXT,
   dateDeRealisation DATETIME,
   descAction TEXT,
   etatAction VARCHAR(50) ,
   IdUser INT NOT NULL,
   IdReunion INT NOT NULL
)ENGINE=InnoDB;

--
-- Table structure for table `AffectationsUser`
--
CREATE TABLE AffectationsUser(
   IdAffectionUser INT AUTO_INCREMENT PRIMARY KEY, 
   IdUser INT,
   IdService INT,
   DateDebut DATE,
   Role VARCHAR(50) ,
   DateFin DATE
)ENGINE=InnoDB;

--
-- Table structure for table `Participations`
--
CREATE TABLE Participations(
   IdParticipation INT AUTO_INCREMENT PRIMARY KEY, 
   IdUser INT,
   IdReunion INT,
   IdRoleReunion INT

)ENGINE=InnoDB;

--
-- Table structure for table `Reservation`
--
CREATE TABLE Reservations(
   IdReservation INT AUTO_INCREMENT PRIMARY KEY, 
   IdReunion INT,
   IdSalle INT,
   dateDebutReservation DATETIME,
   dateFinReservation DATETIME
)ENGINE=InnoDB;

--
-- Table structure for table `Pays`
--
CREATE TABLE Pays(
   IdPays INT AUTO_INCREMENT PRIMARY KEY, 
   LibellePays VARCHAR(150)
)ENGINE=InnoDB;

--
-- Table structure for table `Villes`
--
CREATE TABLE Villes(
   IdVille INT AUTO_INCREMENT PRIMARY KEY, 
   LibelleVille VARCHAR(150),
   CodePostale VARCHAR(10),
   IdPays INT
)ENGINE=InnoDB;

ALTER TABLE FichiersReunions ADD CONSTRAINT FK_FichiersReunion_Reunions FOREIGN KEY(IdReunion) REFERENCES Reunions(IdReunion);
ALTER TABLE Services ADD CONSTRAINT FK_Services_Organisations FOREIGN KEY(IdOrganisation) REFERENCES Organisations(IdOrganisation);
ALTER TABLE SallesReunion ADD CONSTRAINT FK_SallesReunion_Organisations FOREIGN KEY(IdOrganisation) REFERENCES Organisations(IdOrganisation);
ALTER TABLE Sondages ADD CONSTRAINT FK_Sondage_Reunion FOREIGN KEY(IdReunion) REFERENCES Reunions(IdReunion);
ALTER TABLE Users ADD CONSTRAINT FK_Users_RolesApp FOREIGN KEY(IdRoleApp) REFERENCES RolesApp(IdRoleApp);
ALTER TABLE Sujets ADD CONSTRAINT FK_Sujets_Users FOREIGN KEY(IdUser) REFERENCES Users(IdUser);
ALTER TABLE Sujets ADD CONSTRAINT FK_Sujets_Reunions FOREIGN KEY(IdReunion) REFERENCES Reunions(IdReunion);
ALTER TABLE Actions ADD CONSTRAINT FK_Actions_Users FOREIGN KEY(IdUser) REFERENCES Users(IdUser);
ALTER TABLE Actions ADD CONSTRAINT FK_Actions_Reunions FOREIGN KEY(IdReunion) REFERENCES Reunions(IdReunion);
ALTER TABLE AffectationsUser ADD CONSTRAINT FK_AffectionsUsers_Services FOREIGN KEY(IdService) REFERENCES Services(IdService);
ALTER TABLE AffectationsUser ADD CONSTRAINT FK_AffectionsUsers_Users FOREIGN KEY(IdUser) REFERENCES Users(IdUser);
ALTER TABLE Participations ADD CONSTRAINT FK_Participation_Users FOREIGN KEY(IdUser) REFERENCES Users(IdUser);
ALTER TABLE Participations ADD CONSTRAINT FK_Participation_Reunions FOREIGN KEY(IdReunion) REFERENCES Reunions(IdReunion);
ALTER TABLE Participations ADD CONSTRAINT FK_Participation_RolesReunions FOREIGN KEY(IdRoleReunion) REFERENCES RolesReunions(IdRoleReunion);
ALTER TABLE Reservations ADD CONSTRAINT FK_Reservations_Reunions FOREIGN KEY(IdReunion) REFERENCES Reunions(IdReunion);
ALTER TABLE Reservations ADD CONSTRAINT FK_Reservations_SallesReunion FOREIGN KEY(IdSalle) REFERENCES SallesReunion(IdSalle);
ALTER TABLE Villes ADD CONSTRAINT FK_Villes_Pays FOREIGN KEY(IdPays) REFERENCES Pays(IdPays);