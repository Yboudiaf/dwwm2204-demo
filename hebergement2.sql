SELECT * FROM people;
SELECT * FROM residents;
SELECT * FROM roles;


--selection tous les educateurs

SELECT person_id,person_lastname,person_firstname FROM PEOPLE where person_role_id = 5;

--selection tous les employés autre que le directeur

 SELECT person_lastname,person_firstname, person_role_id FROM PEOPLE where person_role_id <> 7;
 
--selection tous les personnes triées par roles puis par nom


SELECT * FROM people ORDER BY person_role_id ASC , person_lastname DESC;

--selection tous les roles avec le nombrtes de personnes associes à chaque roles