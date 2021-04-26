CREATE DATABASE LeBonMerry ;
USE LeBonMerry ;
CREATE TABLE Produit (
 QTE INT,
 NOM varchar(30),
 PRIX float,
 IMG varchar(50),
 CATEGORIE varchar(30),
 DESCRIP varchar(100),
 PRIMARY KEY(NOM)
);
CREATE TABLE Login(
    ID  varchar(20),
    PW varchar(30),
    ST varchar(30),
    PRIMARY KEY (ID)
);