#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Table: pilote
#------------------------------------------------------------

CREATE TABLE pilote (
    pil_num INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    code_postal CHAR(5),
    ville VARCHAR(50),
    date_naissance DATE,
    date_debut_activite DATE,
    date_fin_activite DATE,
    salaire_brut FLOAT,
    PRIMARY KEY (pil_num)
) ENGINE = INNODB;

#------------------------------------------------------------
# Table: avion
#------------------------------------------------------------

CREATE TABLE avion(
    av_num INT NOT NULL AUTO_INCREMENT,
    marque VARCHAR(50),
    type_avion VARCHAR(50),
    capacite INT,
    localisation VARCHAR(50),
    date_mise_en_service DATE,
    PRIMARY KEY (av_num)
)ENGINE=INNODB;

#------------------------------------------------------------
# Table: vol
#------------------------------------------------------------

CREATE TABLE vol(
    vol_num INT NOT NULL AUTO_INCREMENT,
    av_num INT NOT NULL,
    pil_num INT NOT NULL,
    PRIMARY KEY (vol_num),
    CONSTRAINT num_avion_FK FOREIGN KEY (av_num) REFERENCES avion(av_num),
	CONSTRAINT num_pilote_FK FOREIGN KEY (pil_num) REFERENCES pilote(pil_num),
    ville_depart VARCHAR(50),
    ville_arrivee VARCHAR(50),
    heure_depart FLOAT,
    heure_arrivee FLOAT
)ENGINE=INNODB;

#------------------------------------------------------------
# Table: passager
#------------------------------------------------------------

CREATE TABLE passager(
	pas_num INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    PRIMARY KEY (pas_num)
)ENGINE=INNODB;
  
#------------------------------------------------------------
# Table: affectevol
#------------------------------------------------------------

CREATE TABLE affectevol(
	pas_num INT NOT NULL,
    vol_num INT NOT NULL,
    date_vol DATE,
    num_place INT,
    prix FLOAT,
    CONSTRAINT affectevol_PK PRIMARY KEY (pas_num,vol_num,date_vol),
    FOREIGN KEY (pas_num) REFERENCES passager(pas_num),
    FOREIGN KEY (vol_num) REFERENCES vol(vol_num)
)ENGINE=INNODB;