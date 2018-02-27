# crashblog

## Création d'une base de donnée 

CREATE DATABASE CrashBlog-Equipe2 CHARACTER SET 'utf8';

## Création de tables

CREATE TABLE Auteur (
        Auteur_id INT PRIMARY KEY,
        Nom_auteur VARCHAR(100),
        Auteur_articletit VARCHAR(20),
)
ENGINE=MYISAM 



CREATE TABLE Article (
    Art_id INT PRIMARY KEY,
    Art_aut VARCHAR(100),
    Art_titre VARCHAR(20),
    Art_date DATE,
    cate_id INT,
    Cate_nom VARCHAR(50),
)
ENGINE=MYISAM


CREATE TABLE Categorie (
    id_cate INT PRIMARY KEY,
    Nom_cate VARCHAR(50),
)
ENGINE=MYISAM
# crashblog
