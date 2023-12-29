CREATE DATABASE immoconnect;

REATE TABLE role(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255)
);

CREATE TABLE User(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom_complet VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    Tel VARCHAR(255),
    profile VARCHAR(255) NULL,
    role_id
    FOREIGN KEY (role_id) REFERENCES role(id)
);