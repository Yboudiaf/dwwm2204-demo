-- DROP DATABASE IF EXISTS hebergement_social2204;

--ALTER modifier une structure d'une table

-- CREATE DATABASE hebergement_social2204;

-- USE hebergement_social2204; // SQL sERVER OU MYSQL

DROP TABLE IF EXISTS people;
DROP TABLE IF EXISTS roles;


CREATE TABLE roles 
	(
		role_id INT PRIMARY KEY,
		role_name VARCHAR(50) NOT NULL
	);
	
	CREATE TABLE people
	( 
		person_id INT,
		person_lastname VARCHAR(255) NOT NULL,
		person_firstname VARCHAR(50)NOT NULL,
		person_birthdate DATE NOT NULL,
		person_hiredate DATE NOT NULL,
		person_active BOOLEAN NOT NULL,
		person_role_id INT,
		PRIMARY KEY (person_id)
		
	);
	
	ALTER TABLE people
		ADD FOREIGN KEY (person_role_id) REFERENCES roles(role_id);
	
	INSERT INTO roles
	(role_id, role_name)
	VALUES 
	(1,'Directeur'),
	(2,'cuisinier'),
	(4,'technicien'),
	(5,'gardiens'),
	(6,'médecins'),
	(7,'éducateurs');
	
	
	INSERT INTO people
		(person_id,
		person_lastname,
		person_firstname,
		person_birthdate,
		person_hiredate,
		person_active,
		person_role_id)
		
	VALUES
	(1,'MIKE','DEV','1980-02-23','2017-08-27',true,1),
	(2,'YAYA','DiV','1981-02-23','2017-08-26',true,2),
	(3,'MIKI','DUVET','1982-02-23','2017-08-25',true,4),
	(4,'NIKE','DOV','1983-02-23','2017-08-27',true,5),
	(5,'NIKEL','DEVANT','1984-02-23','2017-08-27',true,5),
	(6,'BRIKE','DEVRED','1985-02-23','2017-08-27',true,6),
	(7,'TOTO','DOUEV','1986-02-28','2017-08-27',true,6),
	(8,'TITI','TEV','1987-02-23','2017-08-27',true,6),
	(9,'TUTU','DAVID','1988-02-27','2017-08-27',true,7),
	(10,'TETE','DAV','1989-02-23','2017-08-27',true,7),
	(11,'DODO','GDEV','1980-02-23','2017-08-22',true,7),
	(12,'DUDU','DREV','1980-02-23','2017-08-21',true,7);
	
	
	
	UPDATE people SET person_lastname = 'yacine' WHERE person_id = 1;
	
	SELECT * FROM roles;

	
	SELECT * FROM people;
	-- DDl : Langage de definition des données relationnelles
	-- CREATE DATABASE
	-- CREATE TABLE
	--CREATE VIEW
	-- CREATE PROCEDURE
	-- CREATE TRIGGER
	