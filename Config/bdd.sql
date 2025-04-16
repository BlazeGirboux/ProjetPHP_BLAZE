CREATE TABLE user (
userID int NOT NULL AUTO_INCREMENT,
userName varchar(25),
userEmail varchar(25),
userAdresse varchar(25),
userPhoneNumber varchar(12),
userlogin varchar(8),
PRIMARY KEY (userID)

);

CREATE TABLE vente (
venteID int NOT NULL AUTO_INCREMENT,
venteDate datetime,
venteStatut varchar(8),
ventePrix varchar(25),
venteDescription varchar(500),
venteTitre varChar (25),
userID int NOT NULL,
PRIMARY KEY(venteID),
FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE payement (
payementID int NOT NULL AUTO_INCREMENT,
userID int NOT NULL,
payementMdp varchar(25),
PRIMARY KEY (payementID),
FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE avion (
avionID int NOT NULL AUTO_INCREMENT,
fabricantID int NOT NULL,
avionModele varChar(25),
avionPrix varchar(25),
anneeFrabriquant int,
PRIMARY KEY (avionID),
FOREIGN KEY (fabricantID) REFERENCES fabricant(fabricantID)
);

CREATE TABLE fabricant (
fabricantID int NOT NULL AUTO_INCREMENT,
Nom varChar(25),
pays varchar(25),
PRIMARY KEY (fabricantID)
);