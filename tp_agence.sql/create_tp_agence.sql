
drop table if exists AGENCE_TITANIC cascade;
drop table if exists COMMERCIAUX cascade;
drop table if exists CLIENT cascade;
drop table if exists VOYAGES cascade;
drop table if exists secteur cascade;
drop table if exists gerer cascade;
drop table if exists affecter cascade;


CREATE TABLE AGENCE_TITANIC(
   id_adresse_mail_agence VARCHAR(250),
   nom_agence VARCHAR(250) NOT NULL,
   ville_agence VARCHAR(250) NOT NULL,
   code_postal_agence INT NOT NULL,
   n_rue_agence INT NOT NULL,
   n_telephone_agence INT NOT NULL,
   PRIMARY KEY(id_adresse_mail_agence)
);

CREATE TABLE COMMERCIAUX(
   id_adresse_mail_commerciaux VARCHAR(250),
   commerciaux_portefeuille_client VARCHAR(250) NOT NULL,
   nom_commerciaux VARCHAR(255) NOT NULL,
   prenom_commerciaux VARCHAR(250) NOT NULL,
   communes_commerciaux VARCHAR(250) NOT NULL,
   formation_specifique_commerciaux bool NOT NULL,
   id_adresse_mail_agence VARCHAR(250) NOT NULL,
   PRIMARY KEY(id_adresse_mail_commerciaux),
   UNIQUE(commerciaux_portefeuille_client),
   FOREIGN KEY(id_adresse_mail_agence) REFERENCES AGENCE_TITANIC(id_adresse_mail_agence)
);

CREATE TABLE CLIENT(
   id_adresse_mail_client VARCHAR(250),
   nom_client VARCHAR(250) NOT NULL,
   prenom_client VARCHAR(250) NOT NULL,
   n_telephone_client INT NOT NULL,
   id_adresse_mail_commerciaux VARCHAR(250) NOT NULL,
   PRIMARY KEY(id_adresse_mail_client),
   FOREIGN KEY(id_adresse_mail_commerciaux) REFERENCES COMMERCIAUX(id_adresse_mail_commerciaux)
);

CREATE TABLE VOYAGES(
   id_voyage INT,
   offre_voyage VARCHAR(250) NOT NULL,
   duree_voyage VARCHAR(50) NOT NULL,
   informations_voyage VARCHAR(250),
   tarif_pers varchar(50) NOT NULL,
   destination_voyage VARCHAR(250) NOT NULL,
   escales_voyages VARCHAR(250) NOT NULL,
   services_particuliers_voyage VARCHAR(250) NOT NULL,
   PRIMARY KEY(id_voyage)
);

CREATE TABLE secteur(
   id_num_secteur INT,
   secteurs_commerciaux VARCHAR(250) NOT NULL,
   secteurs_commune VARCHAR(250) NOT NULL,
   PRIMARY KEY(id_num_secteur)
);

CREATE TABLE gerer(
   id_adresse_mail_client VARCHAR(250),
   id_voyage INT,
   PRIMARY KEY(id_adresse_mail_client, id_voyage),
   FOREIGN KEY(id_adresse_mail_client) REFERENCES CLIENT(id_adresse_mail_client),
   FOREIGN KEY(id_voyage) REFERENCES VOYAGES(id_voyage)
);

CREATE TABLE affecter(
   id_adresse_mail_commerciaux VARCHAR(250),
   id_num_secteur INT,
   PRIMARY KEY(id_adresse_mail_commerciaux, id_num_secteur),
   FOREIGN KEY(id_adresse_mail_commerciaux) REFERENCES COMMERCIAUX(id_adresse_mail_commerciaux),
   FOREIGN KEY(id_num_secteur) REFERENCES secteur(id_num_secteur)
);
