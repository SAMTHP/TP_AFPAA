#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

# Requette numéro 1 : Insertion client dans la table client

INSERT INTO client(code_client,nom_client,prenom_client,adresse_client,ville_client,code_postal_client,pays_client,tel_client,email_client)
VALUES("SAMF0001","Founou","Samir","1 Rue SQL","Montpellier","34000","France","0617810287","samir_615@live.fr")

# Requette numéro 2 : Insertion d°une consommation dans la table consommation

INSERT INTO consommation(id_consommation,nom_consommation,date_consommation,heure_consommation,id_client)
VALUES(1,"Petit déjeuner","2019-06-28 09:35:56",10,1)

# Requette numéro 3 : Insertion d°une prestation dans la table prestation

INSERT INTO prestation(id_prestation,code_prestation,designation_prestation)
VALUES(1,"PTDJ","Petit déjeuner");


Requette numéro 4 : Lier la consommation avec l°id 1 et la prestation avec l°id 1

INSERT INTO lier(id_consommation,id_prestation)
VALUES(1,1)

Requette numéro 5 : Création des différents class

INSERT into classe(id_class,nombre_etoile_classe)
VALUES(1,1);
INSERT into classe(id_class,nombre_etoile_classe)
VALUES(2,2);
INSERT into classe(id_class,nombre_etoile_classe)
VALUES(3,3);
INSERT into classe(id_class,nombre_etoile_classe)
VALUES(4,4);
INSERT into classe(id_class,nombre_etoile_classe)
VALUES(5,5);
INSERT into classe(id_class,nombre_etoile_classe)
VALUES(6,6);

Requette numéro 6 : Création de quatre hôtels

INSERT INTO hotel(id_hotel,num_hotel,nom_hotel,adresse_hotel,CPH_hotel,tel_hotel,id_class)
VALUES(1,155,"Le calypso","150 rue du baou","CALPYSO155","0465855555",1);
INSERT INTO hotel(id_hotel,num_hotel,nom_hotel,adresse_hotel,CPH_hotel,tel_hotel,id_class)
VALUES(2,156,"Le lavandin","150 rue du baou","LAVANDIN155","0465855555",1);
INSERT INTO hotel(id_hotel,num_hotel,nom_hotel,adresse_hotel,CPH_hotel,tel_hotel,id_class)
VALUES(3,157,"Le luxor","150 rue du baou","LUXOR155","0465855555",4);
INSERT INTO hotel(id_hotel,num_hotel,nom_hotel,adresse_hotel,CPH_hotel,tel_hotel,id_class)
VALUES(4,158,"Le trois étoiles","150 rue du baou","3ETOILES155","0465855555",3);

Requette numéro 7 : Création des différentes catégories

INSERT INTO categorie(id_categorie,code_categorie,description_categorie)
VALUES(1,"SIMPLE","Concerne toutes les chambres simples");
INSERT INTO categorie(id_categorie,code_categorie,description_categorie)
VALUES(2,"DUO","Concerne toutes les chambres duo");
INSERT INTO categorie(id_categorie,code_categorie,description_categorie)
VALUES(3,"SUITE","Concerne toutes les chambes de type suite");

Requette numéro 8 : Création de quelques chambres

INSERT INTO chambre(id_chambre,num_chambre,tel_chambre,id_hotel,id_categorie)
VALUES(1,"01B","0405060708",1,3);
INSERT INTO chambre(id_chambre,num_chambre,tel_chambre,id_hotel,id_categorie)
VALUES(2,"01B","0405060708",2,1);
INSERT INTO chambre(id_chambre,num_chambre,tel_chambre,id_hotel,id_categorie)
VALUES(3,"03B","0405060708",3,1);
INSERT INTO chambre(id_chambre,num_chambre,tel_chambre,id_hotel,id_categorie)
VALUES(4,"04B","0405060708",4,2);

Requette numéro 9 : Création d°une réservation

INSERT INTO reservation(id_reservation,num_reservation,date_debut_reservation,date_fin_reservation,date_paiement_arrhes,montant_arrhes,id_chambre,id_client)
VALUES(1,"055","2019-06-28 07:30","2019-07-5 12:00","2019-06-28",359.68,3,1);

Requette numéro 10: Lier une prestation à un hôtel

INSERT INTO fournir(id_hotel,id_prestation,tarif_prestation)
VALUES(3,1,9.5);

Requette numéro 11: Lier une catégorie avec une classe quelconque

INSERT INTO facturer(id_categorie,id_class,prix_categorie_chambre)
VALUES(3,4,199);

Requette numéro 12: Afficher le prix de toutes les catégorie de chambres selon les différentes classes

SELECT categorie.code_categorie AS "Type catégorie",classe.nombre_etoile_classe AS "Nombre d'étoiles",facturer.prix_categorie_chambre AS "Prix de la catégorie de chambre" FROM categorie JOIN classe JOIN facturer;