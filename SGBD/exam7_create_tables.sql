#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        id_client          Int  Auto_increment  NOT NULL ,
        code_client        Varchar (12) NOT NULL ,
        nom_client         Varchar (25) NOT NULL ,
        prenom_client      Varchar (25) NOT NULL ,
        adresse_client     Varchar (150) NOT NULL ,
        ville_client       Varchar (25) NOT NULL ,
        code_postal_client Varchar (5) NOT NULL ,
        pays_client        Varchar (25) NOT NULL ,
        tel_client         Varchar (13) NOT NULL ,
        email_client       Varchar (30) NOT NULL
	,CONSTRAINT client_PK PRIMARY KEY (id_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
        id_categorie          Int  Auto_increment  NOT NULL ,
        code_categorie        Varchar (12) NOT NULL ,
        description_categorie Varchar (150) NOT NULL
	,CONSTRAINT categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: classe
#------------------------------------------------------------

CREATE TABLE classe(
        id_class             Int  Auto_increment  NOT NULL ,
        nombre_etoile_classe Int NOT NULL
	,CONSTRAINT classe_PK PRIMARY KEY (id_class)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: hotel
#------------------------------------------------------------

CREATE TABLE hotel(
        id_hotel      Int  Auto_increment  NOT NULL ,
        num_hotel     Int NOT NULL ,
        nom_hotel     Varchar (25) NOT NULL ,
        adresse_hotel Varchar (150) NOT NULL ,
        CPH_hotel     Varchar (12) NOT NULL ,
        tel_hotel     Varchar (12) NOT NULL ,
        id_class      Int NOT NULL
	,CONSTRAINT hotel_PK PRIMARY KEY (id_hotel)

	,CONSTRAINT hotel_classe_FK FOREIGN KEY (id_class) REFERENCES classe(id_class)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: chambre
#------------------------------------------------------------

CREATE TABLE chambre(
        id_chambre   Int  Auto_increment  NOT NULL ,
        num_chambre  Varchar (5) NOT NULL ,
        tel_chambre  Varchar (10) NOT NULL ,
        id_hotel     Int NOT NULL ,
        id_categorie Int NOT NULL
	,CONSTRAINT chambre_PK PRIMARY KEY (id_chambre)

	,CONSTRAINT chambre_hotel_FK FOREIGN KEY (id_hotel) REFERENCES hotel(id_hotel)
	,CONSTRAINT chambre_categorie0_FK FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reservation
#------------------------------------------------------------

CREATE TABLE reservation(
        id_reservation         Int  Auto_increment  NOT NULL ,
        num_reservation        Varchar (12) NOT NULL ,
        date_debut_reservation Datetime NOT NULL ,
        date_fin_reservation   Datetime NOT NULL ,
        date_paiement_arrhes   Date NOT NULL ,
        montant_arrhes         DECIMAL (15,3)  NOT NULL ,
        id_chambre             Int NOT NULL ,
        id_client              Int NOT NULL
	,CONSTRAINT reservation_PK PRIMARY KEY (id_reservation)

	,CONSTRAINT reservation_chambre_FK FOREIGN KEY (id_chambre) REFERENCES chambre(id_chambre)
	,CONSTRAINT reservation_client0_FK FOREIGN KEY (id_client) REFERENCES client(id_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: consommation
#------------------------------------------------------------

CREATE TABLE consommation(
        id_consommation    Int NOT NULL ,
        nom_consommation   Varchar (25) NOT NULL ,
        date_consommation  Datetime NOT NULL ,
        heure_consommation Int NOT NULL ,
        id_client          Int NOT NULL
	,CONSTRAINT consommation_PK PRIMARY KEY (id_consommation)

	,CONSTRAINT consommation_client_FK FOREIGN KEY (id_client) REFERENCES client(id_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: prestation
#------------------------------------------------------------

CREATE TABLE prestation(
        id_prestation          Int NOT NULL ,
        code_prestation        Varchar (12) NOT NULL ,
        designation_prestation Varchar (25) NOT NULL
	,CONSTRAINT prestation_PK PRIMARY KEY (id_prestation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: fournir
#------------------------------------------------------------

CREATE TABLE fournir(
        id_hotel      Int NOT NULL ,
        id_prestation Int NOT NULL,
        tarif_prestation DECIMAL (15,3)  NOT NULL
	,CONSTRAINT fournir_PK PRIMARY KEY (id_hotel,id_prestation)

	,CONSTRAINT fournir_hotel_FK FOREIGN KEY (id_hotel) REFERENCES hotel(id_hotel)
	,CONSTRAINT fournir_prestation0_FK FOREIGN KEY (id_prestation) REFERENCES prestation(id_prestation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: facturer
#------------------------------------------------------------

CREATE TABLE facturer(
        id_categorie           Int NOT NULL ,
        id_class               Int NOT NULL ,
        prix_categorie_chambre DECIMAL (15,3)  NOT NULL
	,CONSTRAINT facturer_PK PRIMARY KEY (id_categorie,id_class)

	,CONSTRAINT facturer_categorie_FK FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
	,CONSTRAINT facturer_classe0_FK FOREIGN KEY (id_class) REFERENCES classe(id_class)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: lier
#------------------------------------------------------------

CREATE TABLE lier(
        id_consommation Int NOT NULL ,
        id_prestation   Int NOT NULL
	,CONSTRAINT lier_PK PRIMARY KEY (id_consommation,id_prestation)

	,CONSTRAINT lier_consommation_FK FOREIGN KEY (id_consommation) REFERENCES consommation(id_consommation)
	,CONSTRAINT lier_prestation0_FK FOREIGN KEY (id_prestation) REFERENCES prestation(id_prestation)
)ENGINE=InnoDB;
