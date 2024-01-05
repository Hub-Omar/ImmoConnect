CREATE DATABASE immoconnect;

CREATE TABLE role (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255)
);

CREATE TABLE User (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom_complet VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    Tel VARCHAR(255),
    profile VARCHAR(255) NULL,
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES role(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Bien (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    emplacement VARCHAR(255),
    type VARCHAR(255),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Annonce (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    prix double,
    titre VARCHAR(255),
    description VARCHAR(255),
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    statut BOOLEAN DEFAULT FALSE
);

CREATE TABLE images(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    path VARCHAR(255),
    annonce_id INT,
    bien_id INT,
    FOREIGN KEY (annonce_id) REFERENCES annonce(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (bien_id) REFERENCES Bien(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Commentaire (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    label VARCHAR(255),
    annonce_id INT,
    user_id INT,
    FOREIGN KEY (annonce_id) REFERENCES Annonce(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Message (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    emetteur_id INT,
    recepteur_id INT,
    message_text VARCHAR(255),
    sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (emetteur_id) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (recepteur_id) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Response(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    message_id INT,
    replay VARCHAR(255),
    sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (message_id) REFERENCES message(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE paiment (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    mode VARCHAR(255),
    prix_final VARCHAR(255),
    annonce_id INT,
    FOREIGN KEY (annonce_id) REFERENCES Annonce(id) ON DELETE CASCADE ON UPDATE CASCADE
);