#------------------------------------------------------------
#                       Script MySQL
#------------------------------------------------------------

#------------------------------------------------------------
#   Requêtes portant sur une seule table sans regroupement
#------------------------------------------------------------

# 1	Quels sont les pilotes dont le nom commence par « S » ?

SELECT * FROM pilote WHERE nom LIKE 'S%';

# 2	Quels sont les pilotes dont le nom comporte le groupe de caractères « cie » ?

SELECT * FROM pilote WHERE nom LIKE '%cie%';

# 3 Quels sont les pilotes dont la troisième lettre du nom est un « b » ?

SELECT * FROM pilote WHERE nom REGEXP '^..b';

# 4 Dans combien de villes distinctes sont localisés des avions ?

SELECT COUNT(DISTINCT localisation) FROM avion;

# 5	Quels sont les vols au départ de Nice entre 12h et 14h ?

SELECT * FROM vol WHERE heure_depart BETWEEN 12 AND 14 AND ville_depart = 'Nice';

# 6	Quelle est la capacité moyenne des avions ?

SELECT AVG(capacite) FROM avion;

# 7	Quels sont les salaires minimum et maximum des pilotes ?

SELECT MIN(salaire_brut) FROM pilote;
SELECT MAX(salaire_brut) FROM pilote;

# 8	Quel est la durée du vol Moulinsart – Sydney ?

SELECT heure_arrivee-heure_depart as SOUSTRACTION FROM `vol` WHERE ville_depart = 'Moulinsart' AND ville_arrivee = 'Sydney';

# 9	Combien y a-t-il de vols Bastia – Paris ?

SELECT * FROM vol WHERE ville_depart = 'basti' AND ville_arrivee = 'paris';

# 10 Donner la liste des villes dans lesquelles habitent des passagers

SELECT ville FROM passager;

#------------------------------------------------------------
#   Requêtes portant sur une seule table avec regroupement
#------------------------------------------------------------

# 11 Donnez pour chaque ville, le nombre de vols au départ de celle-ci.

SELECT ville_depart, COUNT(*) AS nbville FROM vol GROUP BY ville_depart;

# 12 Donnez pour chaque ville, le nombre de vols au départ de celle-ci, uniquement pour les villes dont le nombre de vols au départ de celles-ci est supérieur à 2.

SELECT ville_depart, COUNT(*) AS nbville FROM vol GROUP BY ville_depart HAVING count(nbville) > 2;

# 13 Donnez pour chaque ville, le nombre et les capacités minimum et maximum des avions qui s y trouvent.

SELECT localisation, COUNT(*) AS nbavion, MIN(capacite) AS capmin, MAX(capacite) AS capmax FROM avion GROUP BY localisation;

# 14 Quelle est la capacité moyenne des avions pour chaque ville où sont localisés plus d’un avion ?

SELECT localisation, COUNT(*) AS nbavion, AVG(capacite) AS capacite_moyenne FROM avion GROUP BY localisation HAVING(nbavion > 1);

# 15 Donner le nombre d’avions ayant une capacité supérieure à 100 (places) par localisation

SELECT COUNT(*) AS nbavion_cap_sup100 FROM avion WHERE capacite > 100:

# 16 Combien y a-t-il d’avions de chaque marque ?

SELECT marque, COUNT(*) AS nbavion FROM avion GROUP BY marque;

# 17 Combien y a-t-il d’avions de chaque type ?

SELECT type_avion, COUNT(*) AS nbavion FROM avion GROUP BY type_avion;

# 18 Pour chaque ville (de résidence) des passagers, donner le nombre de ceux-ci.

SELECT ville, COUNT(*) AS nbpassager FROM passager GROUP BY ville;

# 19 Donner le nombre de vols au départ de chaque ville.

SELECT ville_depart, COUNt(*) AS nbvols FROM vol GROUP BY ville_depart;

# 20 Donner les villes (de résidence) et le salaire moyen des pilotes qui y habitent, mais uniquement si le salaire moyen de ceux-ci est supérieur à 5 000 (euros) et qu’il concerne plus d’un pilote.

SELECT ville, COUNT(*) AS nbpilotes, AVG(salaire_brut) AS salaire_moyen FROM pilote GROUP BY ville HAVING(salaire_moyen > 5000 AND nbpilotes > 1 );

#------------------------------------------------------------
#   Requêtes portant sur plusieurs tables
#------------------------------------------------------------

# 21 Quelle est la capacité de l’avion assurant le vol Moulinsart – Sydney ?

SELECT capacite FROM avion,vol WHERE avion.av_num = vol.av_num AND ville_depart = 'Moulinsart' AND ville_arrivee = 'Sydney';

# 22 Dans quelle ville habite le pilote du vol Nice – Nantes et quel est son nom ?

SELECT ville, nom FROM pilote, vol WHERE pilote.pil_num = vol.pil_num AND ville_depart = 'Nice' AND ville_arrivee = 'Nantes';

# 23 Donner les noms des pilotes ayant un vol au départ de Paris.

SELECT DISTINCT nom FROM pilote, vol WHERE pilote.pil_num = vol.pil_num AND ville_depart = 'Paris';

# 24 Donner le type des avions ayant un vol durant plus de 2 (heures).

SELECT type_avion, heure_arrivee-heure_depart as duree FROM avion,vol WHERE avion.av_num = vol.av_num HAVING (duree > 2);

# 25 Sur quel type d’avion a volé Sophie ?

SELECT passager.pas_num, prenom, affectevol.vol_num, vol.av_num, type_avion FROM passager, affectevol, vol, avion WHERE prenom = 'Sophie' AND passager.pas_num = affectevol.pas_num AND affectevol.vol_num = vol.vol_num AND vol.av_num = avion.av_num

# 26 Quel était le nom du pilote ayant transporté le passager habitant Nice ?

SELECT passager.ville as ville_passager, affectevol.vol_num as num_vol, vol.pil_num AS num_pilote, pilote.nom AS nom_pilote FROM passager, affectevol, vol, pilote WHERE passager.ville = 'Nice' AND passager.pas_num = affectevol.pas_num AND affectevol.vol_num = vol.vol_num AND vol.pil_num = pilote.pil_num;

# 27 Donnez le code et le nom des passagers qui sont affectés à un vol dont le prix de la place est supérieur à 150 €.

SELECT passager.pas_num AS code_passager, passager.nom AS nom_passager, affectevol.prix AS prix_vol FROM passager, affectevol WHERE passager.pas_num = affectevol.pas_num AND affectevol.prix > 150;

# 28 Quel est le nombre de vols de chaque pilote ?

SELECT pilote.nom AS nom_pilote, count(*) AS nbvol FROM pilote, vol WHERE pilote.pil_num = vol.pil_num GROUP BY pilote.nom

# 29 Quel est le nombre de types d’avion différents que conduit chaque pilote ?

SELECT DISTINCT vol.pil_num, pilote.nom, COUNT(DISTINCT avion.type_avion) FROM pilote JOIN vol JOIN avion ON pilote.pil_num = vol.pil_num AND vol.av_num = avion.av_num GROUP BY vol.pil_num ORDER BY pilote.nom;

# 30 Quels sont les noms des pilotes qui habitent dans la ville de localisation d un Airbus ?

SELECT DISTINCT(pilote.NOM) AS 'Nom du pilote', pilote.ville AS 'Ville du pilote', avion.av_num AS "ID de l'avion", avion.marque AS "Marque de l'avion", avion.localisation AS "Localisation de l'avion" FROM pilote JOIN vol JOIN avion ON pilote.ville = avion.localisation AND avion.marque = 'Airbus' ORDER BY pilote.nom ASC;

# 31 Quels sont les noms des pilotes qui ont un vol sur un Airbus et qui habitent dans la ville de localisation de cet Airbus ?

SELECT DISTINCT(pilote.NOM) AS 'Nom du pilote', pilote.ville AS 'Ville du pilote', avion.av_num AS "ID de l'avion", avion.marque AS "Marque de l'avion", avion.localisation AS "Localisation de l'avion" FROM pilote JOIN vol JOIN avion ON pilote.pil_num = vol.pil_num AND pilote.ville = avion.localisation AND avion.marque = 'Airbus' AND vol.av_num = avion.av_num ORDER BY avion.marque ASC;

# 32 Quels sont les noms des pilotes qui ont un vol sur un Airbus et qui habitent dans la ville de localisation d un Airbus quelconque ?

SELECT DISTINCT(pilote.NOM) AS 'Nom du pilote', pilote.ville AS 'Ville du pilote', avion.av_num AS "ID de l'avion", avion.marque AS "Marque de l'avion", avion.localisation AS "Localisation de l'avion" FROM pilote JOIN vol JOIN avion ON  pilote.pil_num = vol.pil_num AND pilote.ville = avion.localisation AND avion.marque = 'Airbus' ORDER BY pilote.nom ASC;

# 33 Quels sont les noms des pilotes qui conduisent un Airbus sauf ceux qui habitent dans la ville de localisation d un Airbus ?

SELECT DISTINCT(pilote.nom) AS 'Nom du pilote', pilote.ville AS 'Ville du pilote', avion.marque AS "Marque de l'avion", avion.localisation AS "Localisation de l'avion" FROM pilote JOIN vol JOIN avion ON pilote.pil_num = vol.pil_num AND vol.av_num = avion.av_num AND avion.marque = 'Airbus' AND pilote.ville <> avion.localisation;

# 34 Sélectionner les numéros des pilotes qui conduisent tous les Airbus A320.

SELECT DISTINCT(pilote.pil_num) AS 'Numéro pilote' FROM pilote JOIN vol JOIN avion ON pilote.pil_num = vol.pil_num AND vol.av_num = avion.av_num AND avion.marque = 'Airbus' AND avion.type_avion = 'A320';

# 35 Quels sont les vols ayant un trajet identique (Ville Départ, Ville Arrivée) à ceux assurés par Serge ?

SELECT vol.vol_num AS 'Numéro de vol' FROM vol WHERE (ville_depart, ville_arrivee) in (SELECT ville_depart, ville_arrivee FROM vol, pilote WHERE vol.pil_num = pilote.pil_num AND pilote.nom = 'Serge ');

# 36 Donnez toutes les paires de pilotes habitant la même ville (si possible sans doublon).

SELECT pilote_initial.ville AS 'Ville', pilote_initial.nom AS 'Nom pilote_initial', pilote_compare.nom AS 'Nom pilote_compare' FROM pilote AS pilote_initial JOIN pilote AS pilote_compare ON pilote_initial.ville = pilote_compare.ville AND pilote_initial.nom <> pilote_compare.nom;

# 37 Donner toutes les paires de villes telles qu'un avion localisé dans la ville de départ soit conduit par un pilote résidant dans la ville d'arrivée.

SELECT DISTINCT(avion.localisation) AS "Localisaion de l'avion", vol.ville_depart AS 'Ville de départ du vol', vol.ville_arrivee AS "Ville d'arrivée du vol", pilote.ville AS "Ville du pilote" FROM pilote JOIN vol JOIN avion ON avion.localisation = vol.ville_depart AND pilote.ville = vol.ville_arrivee;

# 38 Quels sont les noms des pilotes dont le salaire est supérieur à la moyenne des salaires ?

SET @moyenne = (SELECT AVG(pilote.salaire_brut) FROM pilote);

SELECT pilote.nom AS "Nom pilote", pilote.salaire_brut AS "Salaire pilote", @moyenne AS "Moyenne salaire" FROM pilote WHERE pilote.salaire_brut > @moyenne;


#------------------------------------------------------------
#   Requêtes utilisant les fonctions intégrées de traitement de date
#------------------------------------------------------------

#------------------------------------------------------------
#   Requêtes de mise à jour
#------------------------------------------------------------

#------------------------------------------------------------
#   Requêtes ajout
#------------------------------------------------------------

#------------------------------------------------------------
#   Requêtes de suppression
#------------------------------------------------------------