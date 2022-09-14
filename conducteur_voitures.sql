-- Database: conducteur_voitures

-- DROP DATABASE IF EXISTS conducteur_voitures;

CREATE DATABASE conducteur_voitures
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'French_France.1252'
    LC_CTYPE = 'French_France.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;
	
	
	
	CREATE TABLE conducteurs(
		id serial PRIMARY KEY,
		nom VARCHAR (30),
		prenom VARCHAR(30),
		departement INT NOT NULL,
		date_permis DATE
		
	);
	
	SELECT * FROM conducteurs
	SELECT * FROM voiture
	
	ALTER TABLE conducteurs
	ALTER COLUMN nom TYPE VARCHAR(50);
	
	